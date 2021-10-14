@extends('layouts.default')
@section('content')

@section('head')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
@stop

<main>
    <div class="list-group list-books">
        @foreach ($resumos as $resumo)
            <a href="url('/review/edit/1')" class="list-group-item list-group-item-action active" aria-current="true">
                <p class="mb-1">Título do resumo: {{ $resumo->titulo_resumo }}</p>
                <p class="mb-1">Autor: {{ $resumo->nome_usuario }}</p>
                <p class="mb-1">Resumo: {{ $resumo->resumo }}</p>
            </a>
        @endforeach
    </div>
</main>


@stop