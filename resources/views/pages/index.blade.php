@extends('layouts.default')
@section('content')

@isset($term)
    <div class="message-search col-md-6 offset-md-3 alert alert-primary text-center">
        Resultado de busca por: {{$term}}
    </div>
@endisset

<div class="list-group list-books">
    @foreach ($livros as $livro)
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            <p class="mb-1">Livro: {{ $livro->titulo_livro }}</p>
            <p class="mb-1">Autor: {{ $livro->nome_autor }}</p>
            <p class="mb-1">Editora: {{ $livro->nome_editora }}</p>
        </a>
    @endforeach
</div>

@if (count($livros) === 0)
    <div class="message-search col-md-6 offset-md-3 alert alert-warning text-center">
        Infelizmente não econtramos nada para você 
    </div>
@endif

@stop