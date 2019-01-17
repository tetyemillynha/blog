<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

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
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= new \App\User;
        $this->authorize('pass', $user);

    
        $user->permission   ='ADMIN';
        $user->name         =$request->get('name');
        $user->email        =$request->get('email');
        $npassword          =$request->get('password');

        if ($npassword != "") {
            $user->password = bcrypt($npassword);
        }else{
            $user->password = "";
        }
    
        $user->save();

        return redirect('users')->with('success', 'Usuário adicinado!');
    }

    public function index()
    {
        $users=\App\User::all();
        
        return view('index',compact('users'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::find($id);
        $this->authorize('pass', $user);
        return view('edit',compact('user','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = \App\User::find($id);
        $this->authorize('pass', $user);

        $user->name     =$request->get('name');
        $user->email    =$request->get('email');

        $npassword = $request->get('password');

        if ($npassword != "") {
            $user->password = bcrypt($npassword);
        }else{
            $user->password = "";
        }
            
        $user->save();
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::find($id);
        $this->authorize('pass', $user);

        $user->delete();

        return redirect('users')->with('success','usuário deletado');
    }

}
