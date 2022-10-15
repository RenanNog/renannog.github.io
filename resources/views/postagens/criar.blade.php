@extends('layouts.main')
<link rel="stylesheet" href="../css/main.css">
@section('title', 'nova postagem')
@section('section')
    <div id="post-create-container" class="col-md-6 offset-md-3">
        <h1> Publique algo</h1>
        <form action="/postagens" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titulo:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome da postagem">
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" cols="20" rows="3"placeholder="Descreva brevemente a sua publicação" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label for="cont">Conteudo:</label>
                <textarea name="cont" id="cont" cols="30" rows="5"placeholder="Coloque aqui o conteudo da postagem" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label for="private">A publicação é privada?</label>
                <select name="private" id="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <input type="submit" name="btn" id="btn" class="btn btn-primary">         
        </form>
    </div>

@stop


