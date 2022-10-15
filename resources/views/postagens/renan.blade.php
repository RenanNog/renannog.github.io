@extends('index')
@section('h1')
{{$blog}}
@stop
@section('conteudo')
    <h2>{{$titulo}}</h2>
    <p> {{$artigo}} </p>
@stop
@section('autor')
    <h3>{{$nome}}</h3>
    <p>Etiam euismod rhoncus egestas (...)</p>
@stop