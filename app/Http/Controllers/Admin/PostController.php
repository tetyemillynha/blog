<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;


use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use App\Post;
use App\Category;
use App\Tag;

class PostController extends Controller
{
    //Block url access
    public function __construct(){
       $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')
        ->where('user_id', auth()->user()->id)
        ->paginate();

        //dd($posts);
        return view('admin.posts.index', compact('posts'));//['posts'=>$posts]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name','id');
        $tags       = Tag::orderBy('name', 'ASC')->get();
        return view('admin.posts.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());

        if ($reqest->file('file')){
                $path = Storage::disk('public')->put('image',$request->file('file'));
                $post->fill(['file'=> asset($path)])->save();
        }
        $post->tags()->attach($request->get('tags'));

        return redirect()->route('posts.edit',$post->id)->with('info', 'Artigo criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name','id');
        $tags       = Tag::orderBy('name', 'ASC')->get();
        $post       = Post::find($id);

        return view('admin.posts.edit', compact('post', 'categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::find($id);

        $post->fill($request->all())->save();

        if ($reqest->file('file')){
            $path = Storage::disk('public')->put('image',$request->file('file'));
            $post->fill(['file'=> asset($path)])->save();
        }
        $post->tags()->sync($request->get('tags'));

        return redirect()->route('posts.edit',$post->id)->with('info', 'Artigo atualizado com sucesso');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();

        return back()->with('info', 'Artigo eliminado com sucesso');
    }
}
