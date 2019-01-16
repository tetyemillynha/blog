@extends('layouts.app')
<!---->
@section('content')
<div class="container">
    <div class="jumbotron">
        <h4>Detalhes do Artigo</h4>
        <hr>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p><strong>Nome: </strong>{{$post->name}}</p>
                        <p><strong>Slug: </strong>{{$post->slug}}</p>
                        <p><strong>Body: </strong>{{$post->body}}</p>
                    </div>
                </div> 
    </div>   
</div>
@endsection