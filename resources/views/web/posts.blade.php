@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row">
                     <!--Carrega postagens-->
                    @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <!--verifica se artigo possui imagem-->
                                @if ($post->file)
                                    <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{ $post->file }}" class="img-responsive">
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