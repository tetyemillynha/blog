@extends('layouts.app')
<!---->
@section('content')
    <div class="container">
        <div class="jumbotron bg-white rounded shadow-sm">
            <h3>Editar Artigo</h3>
            <hr>
            <!--<p class="lead">Crie uma nova etiqueta para associar a um artigo</p>-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        {!! Form::model($post, ['route'=> ['posts.update', $post->id],
                            'method'=> 'PUT', 'files'=> true]) !!}
                                @include('admin.posts.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div> 
        </div>
    </div>
@endsection