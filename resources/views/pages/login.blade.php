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
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-xs-12">
                        <div class="card bg-light text-dark shadow-lg border-0 rounded-lg mt-5">
                            <div class="text-center">
                                <h3 class="text-center my-4">Login</h3>
                            </div>
                            <div class="card-body">
                            <form action="{{ url('/signin') }}" method="POST">
                                    @isset($msg)
                                    <div class="alert alert-warning">{{ $msg }}</div>
                                    @endisset

                                    <div class="form-group">
                                        <label class="small mb-1" for="email"></label>
                                        <input class="form-control py-4 inputs" 
                                            id="email"
                                            name="email"
                                            type="email" 
                                            aria-describedby="emailHelp" 
                                            placeholder="Email">
                                        @isset($errors)
                                        {{ $errors->first('email') }}
                                        @endisset
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="senha"></label>
                                        <input class="form-control py-4 inputs" 
                                            id="senha"
                                            name="senha"
                                            type="password" 
                                            placeholder="Senha">
                                        @isset($errors)
                                        {{ $errors->first('senha') }}
                                        @endisset
                                    </div>
                                    <div>
                                        <button class="form-control btn-dark btn-entrar">
                                            Entrar
                                        </button>
                                    </div>
                                    <!-- <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small color-link" routerLink="/recuperacao-senha">Esqueceu sua senha?</a>
                                    </div> -->
                                </form>
                            </div>
                            <div class="card-mobile card-footer footer text-center">
                                <div ><a class="small color-link" href="{{ url('/signup') }}">Criar conta</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>