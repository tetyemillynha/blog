@extends('layouts.app')
<!---->
@section('content')
    
        
            <div class="container">
                    <div class="jumbotron">
                        <h1>Lista de Categorias</h1>
                        <a class="btn btn-sm btn-primary mb-3" href="{{ route('categories.create') }}" role="button">Inserir</a>

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
                                        @foreach ($categories as $category)
                                            <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            
                                            <td width="10px">
                                                <a href="{{route('categories.show', $category->id)}}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                            </td>
        
                                            <td width="10px">
                                                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                            </td>
        
                                            <td width="10px">
                                                {!! Form::open(['route' => ['categories.destroy', $category->id], 
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
        
                                {{$categories->render()}}
                            </div>
                        </div> 
                    </div>
            </div>
@endsection