@extends('layouts.app')
<!---->
@section('content')
    <div class="container">
        
            <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1>Mostrar Etiqueta</h1>
                        </div>
                    </div>
            </div>
        

            <div id="container">
                <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <p><strong>Nome: </strong>{{$tag->name}}</p>
                            <p><strong>Slug: </strong>{{$tag->slug}}</p>
                        </div>
                </div> 
            </div>   
    </div>
@endsection