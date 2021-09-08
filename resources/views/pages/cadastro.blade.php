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
                            <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome completo</label>
                                <input type="text" class="form-control" id="name" placeholder="Leonardo da Silva">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Data de nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" placeholder="21/12/1999">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Senha</label>
                                <input type="password" class="form-control" id="senha">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Sexo</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                    <option value="N">Não declarar</option>
                                </select>
                            </div>
                            <div>
                                <input class="form-control btn-dark" type="submit" value="Cadastrar">
                            </div>
                            <div class="card-mobile card-footer footer text-center">
                                <div ><a class="small color-link" href="{{ url('/signin') }}">Login</a></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection