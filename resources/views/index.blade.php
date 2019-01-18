
@extends('layouts.app')
@section('content')
<!--Users List-->
<div class="container">

    <div class="jumbotron bg-white rounded shadow-sm">
        <h1>Lista de Usuários</h1>
            <a class="btn btn-sm btn-primary mb-3" href="{{action('UserController@create')}}" role="button">Adicionar usuário</a>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <table class="table table-striped table-hover bg-white">
                              <thead>
                                  <tr>
                                    <th width="20px">ID</th>
                                      <th>Nome </th>
                                       <th colspan="3">&nbsp;</th>
                                  </tr>
                              </thead>
        
                                <tbody>
                                
                                @foreach($users as $user)
                                
                                <tr>
                                  <td>{{$user['id']}}</td>
                                  <td>{{$user['name']}}</td>
                              
                                  
                                  <td><a href="{{action('UserController@edit', $user['id'])}}" class="btn btn-sm btn-outline-secondary">Editar</a></td>
                                  <td>
                                    <form action="{{action('UserController@destroy', $user['id'])}}', $user['id'])}}" method="post">
                                      @csrf
                                      <input name="_method" type="hidden" value="DELETE">
                                      <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                    </form>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                        </table>
                       {{$users->render()}} 
                    </div>
                </div>
              </div>
</div>
  
@endsection