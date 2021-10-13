<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand " href="{{ url('/') }}"><img class="logo" src="/images/logo.png" alt=""></a>
        <form class="d-flex" action="{{ url('/books') }}" method="GET">
            <input class="form-control" type="text" name="s" value="@isset($term){{$term}}@endisset" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-primary" type="submit"><i class="fab fa-searchengin"></i></button>
           
            @if($userLogged)
            <a class="btn-login" href="{{ url('/resenha') }}">
                <button type="button" class="btn btn-primary">
                    Nova Resenha
                </button>
            </a>
            @endif
        </form>
        @if($userLogged)
        <a class="btn-login" href="{{ url('/signout') }}">
            <button type="button" class="btn btn-primary">
                Logout
            </button>
        </a>
        @else
        <a class="btn-login" href="{{ url('/signin') }}">
            <button type="button" class="btn btn-primary">
                Login
            </button>
        </a>
        @endif
    </div>
</nav>