@extends('layouts.app')

@section('content')
    
        
            <div class="container">
                    <div class="jumbotron bg-white rounded shadow-sm">
                        <h1>Lista de Usuários</h1>
                        <a class="btn btn-sm btn-primary mb-3" href="{{ route('users.create') }}" role="button">Adicionar usuário</a>

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
                                        @foreach ($users as $user)
                                            <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                             <!--
                                            <td width="10px">
                                                <a href="{{route('users.show', $user->id)}}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                            </td>
                                            -->
        
                                            <td width="10px">
                                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                            </td>
        
                                            <td width="10px">
                                                {!! Form::open(['route' => ['users.destroy', $user->id], 
                                                'method'=> 'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger">
                                                        Deletar
                                                    </button>
                                                {!! Form::close() !!}
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