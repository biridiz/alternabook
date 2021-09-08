@extends('layouts.default')
@section('content')

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Alternabok!</title>
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1" async>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet" async>
        <link  rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous" async>
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet" async>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" async>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous" async></script>
    </head>
    
    <body>
        <form action="/" method="POST">
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
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </body>
</html>

@stop