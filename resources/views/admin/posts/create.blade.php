@extends('layouts.app')
<!--Create Post-->
@section('content')

    <div class="container">
        <div class="jumbotron bg-white rounded shadow-sm">
            <h3>Criar Artigo</h3>
            <p class="lead">Crie um novo artigo</p>
            <hr>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['route'=> 'posts.store', 'files'=> true]) !!}
                        @include('admin.posts.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection