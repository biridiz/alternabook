<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand "><img class="logo" src="/images/logo.png" alt=""></a>
        <form class="d-flex" action="/books" method="GET">
            <input class="form-control" type="text" name="s" value="@isset($term){{$term}}@endisset" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-primary" type="submit"><i class="fab fa-searchengin"></i></button>
        </form>
        <?php
        $authenticate = FALSE; ?>
        <?php if (!$authenticate) { ?>
            <a class="btn-login" href="/login">
                <button class="btn btn-primary">
                    Login
                </button>
            </a>
        <?php } ?>
        <?php if ($authenticate) { ?>
            <a class="btn-login" href="/logout">
                <button class="btn btn-primary">
                    Logout
                </button>
            </a>
        <?php } ?>
    </div>
</nav>