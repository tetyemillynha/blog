@extends('layouts.app')
<!--Create Category-->
@section('content')

    <div class="container">
        <div class="jumbotron bg-white rounded shadow-sm">
            <h3>Criar Categoria</h3>
            <p class="lead">Crie uma nova categoria para associar a um artigo</p>
            <hr>
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