@extends('layouts.default')
@section('content')

@isset($term)
    <div class="message-search col-md-6 offset-md-3 alert alert-primary text-center">
        Resultado de busca por: {{$term}}
    </div>
@endisset

<?php
foreach ($livros as $livro) { ?>
    <div class="list-group list-books">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Nome do livro <?php echo $livro ?></h5>
            <small>1 dia atrás <?php echo $livro ?></small>
            </div>
            <p class="mb-1">Descrição <?php echo $livro ?></p>
            <small>Autor da publicação <?php echo $livro ?></small>
        </a>
    </div>
<?php } 
if (count($livros) == 0) { ?>
    <div class="message-search col-md-6 offset-md-3 alert alert-warning text-center">
        Infelizmente não econtramos nada para você 
    </div>
<?php }
?>

@stop