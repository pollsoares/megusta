<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Me Gusta - Sobremesas e Chocolates </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="http://localhost:8000/style.css">
</head>

<body>

    <header>       
<<<<<<< HEAD
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: brown;">
=======
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #8B4513;">
>>>>>>> a79aecca8d7b1d7a61d2aa4c53fa4e4b1e1d7bea
            <a class="navbar-brand" href="#"><strong>Me Gusta</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ (Route::current()->getName() === 'site.home' ? 'active' : '')}} ">
                        <a class="nav-link" href="{{ route('site.home') }}"><strong>Inicio</strong></a>
                    </li> 
                    <li class="nav-item {{ (Route::current()->getName() === 'site.produtos' ? 'active' : '')}} ">
                        <a class="nav-link" href="{{ route('site.produtos') }}"><strong>Produtos</strong></a>
                    </li>                  
                    <li class="nav-item {{ (Route::current()->getName() === 'site.contato' ? 'active' : '')}} ">
                        <a class="nav-link" href="{{ route('site.contato') }}"><strong>Contato</strong></a>
                    </li>
                    <li class="nav-item {{ (Route::current()->getName() === 'site.sobre' ? 'active' : '')}} ">
                        <a class="nav-link" href="{{ route('site.sobre') }}"><strong>Sobre</strong></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main role="main">
        @yield('content')
    </main>   

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo da página</a></p>
        <p>&copy; {{ date('y')}} Me Gusta - Sobremesas e Chocolates. &middot; <a href="#">Privacidade</a> &middot;
            <a href="#">Termos</a></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>