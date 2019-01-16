@extends('layouts.app')
<!---->
@section('content')
<div class="container">
    <div class="jumbotron">
        <h4>Detalhes da Categoria</h4>
        <hr>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <p><strong>Nome: </strong>{{$category->name}}</p>
                    <p><strong>Slug: </strong>{{$category->slug}}</p>
                    <p><strong>Body: </strong>{{$category->body}}</p>
                </div>
        </div> 
    </div>   
</div>
@endsection