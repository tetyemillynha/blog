@extends('layouts.app')
<!---->
@section('content')
    
        
            <div class="container">
                    <div class="jumbotron bg-white rounded shadow-sm">
                        <h1>Meus Artigos</h1>
                        <a class="btn btn-sm btn-primary mb-3" href="{{ route('posts.create') }}" role="button">Criar artigo</a>

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
                                        @foreach ($posts as $post)
                                            <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->name}}</td>
                                            
                                            <td width="10px">
                                                <a href="{{ route ('post', $post->slug ) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                            </td>
        
                                            <td width="10px">
                                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                            </td>
        
                                            <td width="10px">
                                                {!! Form::open(['route' => ['posts.destroy', $post->id], 
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
        
                                {{$posts->render()}}
                            </div>
                        </div> 
                    </div>
            </div>
@endsection