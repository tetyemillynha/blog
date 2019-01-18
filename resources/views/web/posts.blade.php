@extends('layouts.app')

@section('content')
<div class="jumbotron text-center bg-gradient">
    <div class="container ">
        <h1 class="jumbotron-heading">Summer Breeze</h1>
        <p class="lead text-muted">
            It's a real strange world,
            sometimes it feels like it's not my world
            but it's the only world I got.
            Or maybe, maybe it's different now then? 
        </br>
        (S.O.J.A)
        </p>   
    </div>
</div>

    <div class="container">
            <div class="row">
                     <!--Carrega postagens-->
                    @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <!--verifica se artigo possui imagem-->
                                @if ($post->file)
                                    <img class="card-img-top" alt="Thumbnail [100%x225]" style="max-height: 225px; max-width: 100%; display: block;" src="{{ $post->file }}" class="img-responsive">
                                @endif
                
                                <div class="card-body">
                                    <h4> {{ $post->name }}</h4>  
                                    <p class="card-text">{{$post->execerpt}}</p>
                                    
                                    <small class="text-muted">{{ date('d/m/Y', strtotime($post->created_at)) }} por {{ $post->user->name }}</small>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{ route ('post', $post->slug )}}" class="pull-right">Ler artigo completo</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{$posts->render()}}
            </div>
    </div>

    

@endsection