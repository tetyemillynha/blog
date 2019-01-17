@extends('layouts.app')
<!---->
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

                        <div class="row">
                          <div class="col-md-8 col-md-offset-2">
                            <label for="Name">Nome:</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                        </div>

                            <div class="row">
                              <div class="col-md-8 col-md-offset-2">
                                <label for="Email">E-mail:</label>
                                <input type="text" class="form-control" name="email">
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <label for="Password">Senha:</label>
                                  <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="row mt-10">
                                <div class="col-md-8 col-md-offset-2" style="margin-top:10px">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                            
                      </form>
                    </div>
                </div>
        </div>
@endsection