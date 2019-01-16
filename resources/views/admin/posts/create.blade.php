@extends('layouts.app')
<!---->
@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1>Criar Artigo</h1>
            <p class="lead">Crie um novo artigo</p>

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