@extends('layouts.default')

@section('head')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
@stop

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xs-12">
                <div class="card bg-light text-dark shadow-lg border-0 rounded-lg mt-5">
                    <div class="text-center">
                        <h3 class="text-center my-4">Cadastro</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/review/register') }}" class="container-review" method="POST">
                            <input name="codigo_livro" id="codigo_livro" type="hidden" value="{{ isset($form) ? $form['codigo_livro'] : '' }}" />

                            @isset($msg)
                            <div class="alert alert-warning">{{ $msg }}</div>
                            @endisset

                            <div class="form-group ui-widget">
                                <label>Livro</label>
                                <span class="badge badge-info clear-label {{ isset($form) && $form['codigo_livro'] > 0 ? '' : 'hide' }}">Limpar</span>
                                <input type="text" class="form-control" id="livro" name="livro" {{ isset($form) && $form['codigo_livro'] > 0 ? 'disabled=disabled' : '' }} value="{{ isset($form) ? $form['livro'] : '' }}">
                                @isset($errors)
                                {{ $errors->first('livro') }}
                                @endisset
                            </div>
                            <div class="form-group">
                                <label>Autor</label>
                                <input type="text" class="form-control" name="autor" id="autor" {{ isset($form) && $form['codigo_livro'] > 0 ? 'disabled=disabled' : '' }} value="{{ isset($form) ? $form['autor'] : '' }}">

                                @isset($errors)
                                {{ $errors->first('autor') }}
                                @endisset
                            </div>
                            <div class="form-group">
                                <label>Editora</label>
                                <input type="text" class="form-control" name="editora" id="editora" {{ isset($form) && $form['codigo_livro'] > 0 ? 'disabled=disabled' : '' }} value="{{ isset($form) ? $form['editora'] : '' }}">

                                @isset($errors)
                                {{ $errors->first('editora') }}
                                @endisset
                            </div>
                            <div class="form-group">
                                <label>Resenha</label>
                                <textarea rows="10" class="form-control" name="texto" id="texto"></textarea>

                                @isset($errors)
                                {{ $errors->first('texto') }}
                                @endisset
                            </div>
                            <div>
                                <input class="form-control btn-dark" type="submit" value="Cadastrar">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
    $(document).ready(() => {
        const $autocomplete = $( "#livro" ).autocomplete({
            source: "{{ url('/books-detail') }}",
            minLength: 1,
            select: function( event, ui ) {
                setTimeout(() => {
                    $("#livro").val(ui.item.nome_livro).attr('disabled', 'disabled');
                }, 50);
                $("#autor").val(ui.item.nome_autor).attr('disabled', 'disabled');
                $("#editora").val(ui.item.nome_editora).attr('disabled', 'disabled');
                $("#codigo_livro").val(ui.item.id_livro);

                $(".clear-label").removeClass('hide');
            },
        });

        $autocomplete.autocomplete( "instance" )._renderItem = function( ul, item ) {
            return $( "<li>" )
                .append( "<div>" + item.nome_livro + " - Edit.: " + item.nome_editora + " - Autor: " + item.nome_autor + "</div>" )
                .appendTo( ul );
        };

        $(".clear-label").click(() => {
            $("#livro").val('').removeAttr('disabled');
            $("#autor").val('').removeAttr('disabled');
            $("#editora").val('').removeAttr('disabled');
            $("#codigo_livro").val('');

            $(".clear-label").addClass('hide');
        });
    });

    $('.container-review').submit(function(e) {
        $(':disabled').each(function(e) {
            $(this).removeAttr('disabled');
        })
    });
</script>

<style>
    .container-review .clear-label {
        font-size: 11px!important;
        cursor: pointer;
    }

    .container-review .clear-label.hide {
        display: none;
    }
</style>
@endsection