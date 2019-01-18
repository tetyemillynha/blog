@extends('layouts.app')
<!--Edit Category-->
@section('content')
    <div class="container">
        <div class="jumbotron bg-white rounded shadow-sm">
            <h3>Editar Categoria</h3>
            <hr>
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