<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/show.css">
@extends('layouts.main')

@section('title',$post->titulo)

@section('section')

    <div class="col-md-10 offset-md-0">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="https://cdn.pixabay.com/photo/2016/09/08/22/43/books-1655783__340.jpg" class="img-fluid" alt="{{$post->titulo}}">
                
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$post->titulo}}</h1>
                <hr>
                <p>{{$post->descricao}}</p>
                <hr>
                <p>{{$post->conteudo}}</p>
                <span>
                    <p class="autor">Autor: {{$postController->editor($post)}}</p>
                    <p class="data-hora">Publicado em {{$post->data_criacao}} as {{$post->hora_criacao}}</p>
                </span>
            </div>
        </div>
    </div>
@endsection
  