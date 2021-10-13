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
                        <form action="{{ url('/signup') }}" method="POST">

                            @isset($msg)
                            <div class="alert alert-warning">{{ $msg }}</div>
                            @endisset

                            <div class="form-group">
                                <label>Nome completo</label>
                                <input type="text" class="form-control" name="name" placeholder="Leonardo da Silva">
                                @isset($errors)
                                {{ $errors->first('name') }}
                                @endisset
                            </div>
                            <div class="form-group">
                                <label>Data de nascimento</label>
                                <input type="date" class="form-control" name="data_nascimento" placeholder="21/12/1999">

                                @isset($errors)
                                {{ $errors->first('data_nascimento') }}
                                @endisset
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="name@example.com">

                                @isset($errors)
                                {{ $errors->first('email') }}
                                @endisset
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" class="form-control" name="senha">

                                @isset($errors)
                                {{ $errors->first('senha') }}
                                @endisset
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Sexo</label>
                                <select class="form-control" name="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                    <option value="N">Não declarar</option>
                                </select>
                            </div>
                            <div>
                                <input class="form-control btn-dark" type="submit" value="Cadastrar">
                            </div>
                            <div class="card-mobile card-footer footer text-center">
                                <div><a class="small color-link" href="{{ url('/signin') }}">Login</a></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection