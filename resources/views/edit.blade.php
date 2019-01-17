@extends('layouts.app')
<!---->
@section('content')
    <div class="container">
        <div class="jumbotron bg-white rounded shadow-sm">
            <h3>Editar Categoria</h3>
            <hr>
            <!--<p class="lead">Crie uma nova etiqueta para associar a um artigo</p>-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                     
                        <form method="post" action="{{action('UserController@update', $user['id'])}}">
                          @csrf
                          <input name="_method" type="hidden" value="PATCH">

                              <div class="row">
                                  <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                        <label class="pr-3">
                                            <input  type="radio" name="permission" value="ADMIN" {{$user->permission}}> Administrador<br>
                                        </label>
                                        
                                        <label>
                                            <input type="radio" name="permission" value="READER" {{$user->permission}}> Leitor<br>
                                        </label>
                                  </div>
                                </div>
                              </div>
                            
                              <div class="row">
                                  <div class="col-md-8 col-md-offset-2">
                                  <label for="name">Nome</label>
                                  <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-8 col-md-offset-2">
                                      <label for="email">E-mail</label>
                                      <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                  
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