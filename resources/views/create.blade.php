@extends('layouts.app')
<!--Form User Create-->
@section('content')
    <div class="container">
        <div class="jumbotron bg-white rounded shadow-sm">
            <h3>Criar Usuário</h3>
            <hr>
            <!--<p class="lead">Crie uma nova etiqueta para associar a um artigo</p>-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <form method="post" action="{{url('users')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                        <!--Permissions-->
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
                        <!--Data personal-->
                        <div class="row">
                          <div class="col-md-8 col-md-offset-2">
                            <label for="Name">Nome</label>
                            <input type="text" class="form-control" name="name" required autofocus>
                          </div>
                        </div>

                            <div class="row">
                              <div class="col-md-8 col-md-offset-2">
                                <label for="Email">E-mail</label>
                                <input type="email" class="form-control" name="email" required autofocus>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <label for="Password">Senha</label>
                                  <input type="password" class="form-control" name="password" required autofocus>
                                </div>
                            </div>

                            <div class="row mt-10">
                                <div class="col-md-8 col-md-offset-2" style="margin-top:10px">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        
                      </form>
                    </div>
                </div>
        </div>
@endsection