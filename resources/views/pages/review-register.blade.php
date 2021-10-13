@extends('layouts.default')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-xs-12">
                <div class="card bg-light text-dark shadow-lg border-0 rounded-lg mt-5">
                    <div class="text-center">
                        <h3 class="text-center my-4">Cadastro</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/review/register') }}" method="POST">

                            <!-- @isset($msg)
                            <div class="alert alert-warning">{{ $msg }}</div>
                            @endisset -->

                            <div class="form-group">
                                <label>Livro</label>
                                <input type="text" class="form-control" name="livro" placeholder="">
                                <!-- @isset($errors)
                                {{ $errors->first('namee') }}
                                @endisset -->
                            </div>
                            <div class="form-group">
                                <label>Autor</label>
                                <input type="text" class="form-control" name="autor" placeholder="">

                                <!-- @isset($errors)
                                {{ $errors->first('data_nascimento') }}
                                @endisset -->
                            </div>
                            <div class="form-group">
                                <label>Editora</label>
                                <input type="text" class="form-control" name="editora" placeholder="">

                                <!-- @isset($errors)
                                {{ $errors->first('email') }}
                                @endisset -->
                            </div>
                            <div class="form-group">
                                <label>Resenha</label>
                                <textarea class="form-control" name="texto">

                                <!-- @isset($errors)
                                {{ $errors->first('senha') }}
                                @endisset -->
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
@endsection