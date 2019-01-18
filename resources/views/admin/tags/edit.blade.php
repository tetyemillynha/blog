@extends('layouts.app')
<!--Edit Tags-->
@section('content')
    <div class="container">
        <div class="jumbotron bg-white rounded shadow-sm">
            <h1>Editar tag</h1>
            <hr>
            <!--<p class="lead">Crie uma nova etiqueta para associar a um artigo</p>-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        {!! Form::model($tag, ['route'=> ['tags.update', $tag->id],
                            'method'=> 'PUT']) !!}
                                @include('admin.tags.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div> 
        </div>
    </div>
@endsection