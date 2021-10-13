<!doctype html>
<html lang="pt-br">
    <head>

        @include('includes.head')
        @yield('head')

    </head>
    
    <body>
        <header>

            @include('includes.header')

        </header>

        <section class="section">

            @yield('content')

        </section>

        <footer class="bg-dark text-center">

            @include('includes.footer')
            
        </footer>

    </body>
</html>