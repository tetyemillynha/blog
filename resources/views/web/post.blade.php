@extends('layouts.app')

@section('content')
    <main role="main" class="container">
            <div class="jumbotron">
              <h1>{{$post->name}}</h1>
              
              <h4>{{$post->execerpt}}</h4>
              <hr>

               <!--verifica se artigo possui imagem-->
                @if ($post->file)
                    <img src="{{ $post->file }}" class="img-responsive" style="max-height: 480px; max-width: 100%; display: block;">
                    <hr>
                @endif
                
                <p class="lead">{!! $post->body !!}</p>

                Autor: {{ $post->user->name }},  {{ date('d/m/Y', strtotime($post->created_at)) }}<br>
                <hr>
                
                Etiquetas:
                @foreach( $post->tags as $tag )
                    <a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a>
                @endforeach

                <br>
                Categoria: 
                <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
            </div>
    </main>
@endsection