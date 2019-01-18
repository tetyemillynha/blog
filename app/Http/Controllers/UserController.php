<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Post;

class UserController extends Controller
{

     //Block url access
     public function __construct(){
        $this->middleware('auth');
     }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usr_permission = auth()->user()->permission;

        if( $usr_permission !== 'ADMIN')
        {
            return redirect('blog');
        }else{
            return view('create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {

        $usr_permission = auth()->user()->permission;

        if( $usr_permission !== 'ADMIN')
        {
            return redirect('blog');
        }else{
            $user = new User;

            $user->permission   = $request->get('permission');
            $user->name         = $request->get('name');
            $user->email        = $request->get('email');
            $npassword          = $request->get('password');
    
            if ($npassword != "") {
                $user->password = bcrypt($npassword);
            }else{
                $user->password = "";
            }
        
            $user->save();
            return redirect('users')->with('success', 'Usuário adicinado!');
        }
    }

    public function index()
    {
        $usr_permission = auth()->user()->permission;

        if( $usr_permission !== 'ADMIN')
        {
            return redirect('blog');
        }else{

            $users = User::paginate(10);
            return view('index',compact('users'));
        }
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usr_permission = auth()->user()->permission;
        $usr_id         = auth()->user()->id;

        if( $usr_permission !== 'ADMIN')
        {
            $user = User::find($id);
            return view('edit',compact('user',$usr_id));
        }else{
            $user = User::find($id);
            return view('edit',compact('user','id'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $usr_permission = auth()->user()->permission;

        if( $usr_permission !== 'ADMIN')
        {
            return redirect('blog');
        }else{
            $user = User::find($id);
            $user->permission   = $request->get('permission');
            $user->name         = $request->get('name');
            $user->email        = $request->get('email');
    
            $npassword          = $request->get('password');
    
            if ($npassword != "") {
                $user->password = bcrypt($npassword);
            }else{
                $user->password = "";
            }
                
            $user->save();
            return redirect('users');

        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usr_permission = auth()->user()->permission;

        if( $usr_permission !== 'ADMIN')
        {
            return redirect('blog');
        }else{
            $user = User::find($id);
            $user->delete();
    
            return redirect('users')->with('success','Usuário deletado!'); 
        }
        
    }

}
