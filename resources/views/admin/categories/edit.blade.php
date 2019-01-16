@extends('layouts.app')
<!---->
@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Editar Categoria</h1>
            <!--<p class="lead">Crie uma nova etiqueta para associar a um artigo</p>-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        {!! Form::model($category, ['route'=> ['categories.update', $category->id],
                            'method'=> 'PUT']) !!}
                                @include('admin.categories.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div> 
        </div>
    </div>
@endsection