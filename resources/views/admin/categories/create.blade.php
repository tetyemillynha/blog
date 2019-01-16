@extends('layouts.app')
<!---->
@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1>Criar Categoria</h1>
            <p class="lead">Crie uma nova categoria para associar a um artigo</p>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['route'=> 'categories.store']) !!}
                        @include('admin.categories.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>

        </div>

         
    </div>
@endsection