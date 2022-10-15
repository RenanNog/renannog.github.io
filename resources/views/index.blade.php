<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/cards.css">
@extends('layouts.main')

@section('title','blog.com')

@section('section')
    
    <div id="postagens-container" class="">
        <h2>Postagens da semana</h2>
        <p>Veja as postagens da semana</p>
        <hr>
    </div>
    <div id="cards-container" class="row">
        @foreach($posts as $posts)
            <div class="card" style="margin:10px;">
                
                <div class="card-body">
                    
                    <h5 class="card-title">{{$posts->titulo}}</h5> 
                    <hr>   
                    <div class="card-description">Descrição: {{$posts->descricao}}</div>
                    <p class="card-editor">Editada por: {{$postController->editor($posts)}}</p>
                    <div class="card-date">Data: {{$posts->data_criacao}} Hora: {{$posts->hora_criacao}}</div>
                    <a href="/postagens/{{$posts->id}}" class="btn btn-primary">Saber mais...</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection