@extends('layouts.app')
<!--Form Edit User-->
@section('content')
    <div class="container">
        <div class="jumbotron bg-white rounded shadow-sm">
            <h3>Editar usuário</h3>
            <hr>
            <!--<p class="lead">Crie uma nova etiqueta para associar a um artigo</p>-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      @if (Auth::user()->permission == 'ADMIN')
                       <form method="post" action="{{action('UserController@update', $user['id'])}}">

                        @csrf
                          <input name="_method" type="hidden" value="PATCH">

                              <div class="row mb-3">
                                  <div class="col-md-8 col-md-offset-2">
                                    <div class="form-check form-check-inline"> 
                                          <input type="radio" name="permission" id="admin" value="ADMIN" class= "form-check-input" required autofocus> <label class="form-check-label" for="inlineRadio1">Administrador</label>
                                    </div>

                                    <div class="form-check form-check-inline">   
                                          <input type="radio" name="permission" id="reader" value="READER" class= "form-check-input" required autofocus> <label class="form-check-label" for="inlineRadio1">Leitor</label>
                                    </div>

                                </div>
                              </div>

                      @else
                        <form method="post" action="{{action('UserController@update', Auth::user()->id)}}">
                          
                        <input name="_method" type="hidden" value="PATCH">
                      @endif
                       
                          
                            
                              <div class="row">
                                  <div class="col-md-8 col-md-offset-2">
                                  <label for="name">Nome</label>
                                  <input type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-8 col-md-offset-2">
                                      <label for="email">E-mail</label>
                                      <input type="email" class="form-control" name="email" value="{{$user->email}}" required autofocus>
                                  
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-8 col-md-offset-2">
                                      <label for="password">Senha</label>
                                      <input type="password" class="form-control" name="password" value="">
                                    
                                  </div>
                              </div>

                              <div class="row">
                                <div class="form-group col-md-4" style="margin-top:10px">
                                  <button type="submit" class="btn btn-sm btn-primary" >Atualizar</button>
                                </div>
                              </div>

                      </form>
              </div>
                </div>
        </div>
    </div>

       
   @endsection