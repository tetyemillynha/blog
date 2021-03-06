<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\User;

class PageController extends Controller
{
    //carrega todos os posts com o status publicado
    public function blog(){
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(9);
    	return view('web.posts', compact('posts'));
    }

    //carrega os posts da categoria buscada
    public function category($slug){
        $category   = Category::where('slug', $slug)->pluck('id')->first();
        $posts      = Post::where('category_id', $category)->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(9);
        
        return view('web.posts', compact('posts'));
    }

    //carrega os posts da categoria buscada
    public function tag($slug){
        $posts      = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug',$slug);
        }) 
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(9);
        
        return view('web.posts', compact('posts'));
    }

    public function post($slug){
        $post = Post::where('slug', $slug)->first();

        return view('web.post', compact('post'));
    }
}
