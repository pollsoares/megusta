@extends('site.master.layout')
@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#777" /></svg>
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Trufas</h1>

                    @if(date('H') >= 0 && date('H') <= 12)
                        <p> Que tal uma sobremesa agora de manhã? </p>
                    @elseif (date('H') >= 13 && date('H') <= 18) 
                        <p> Que tal uma sobremesa agora a tarde? </p>
                    @else
                        <p> Que tal uma sobremesa agora a noite? </p>
                    @endif

                            <p>Sobremesas saborosas, feitas com chocolate de qualidade, amor e carinho!</p>
                            <p><a class="btn btn-lg btn-primary" href="/produtos" role="button">Ver produtos</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#777" /></svg>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Chocolates deliciosos para alegrar seu paladar.</h1>
                    <p>Não perca tempo!.</p>
                    <p><a class="btn btn-lg btn-primary" href="/produtos" role="button">Veja mais</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#777" /></svg>
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>Balas de chocolate feitas com carinho.</h1>
                    <p>Esta esperando oque?</p>
                    <p><a class="btn btn-lg btn-primary" href="/produtos" role="button">Galeria</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Proximo</span>
    </a>
</div>


<!-- Marketing messaging and featurettes
          ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-cube" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                    dy=".3em">140x140</text>
            </svg>
            <h2>Chocolates</h2>
            <p>Chocolates de qualidade para proporcionar sabor aos nossos clientes</p>
            <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                    dy=".3em">140x140</text>
            </svg>
            <h2>Trufas</h2>
            <p>Trufas caseiras maravilhosas para satisfazer seu paladar!</p>
            <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                    dy=".3em">140x140</text>
            </svg>
            <h2>Torta gelada</h2>
            <p>Torta gelada de nozes para um a experiencia deliciosa!</p>
            <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    @yield('produtos')


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">A primeira maravilha! <span class="text-muted">Esta vai atrapalhar a sua mente.</span></h2>
            <p class="lead">Trufa de chocolate, feita com ingredientes de primeira qualidade, muito amor e carinho!</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh sim, isto é muito bom! <span class="text-muted">Veja e se apaixone.</span></h2>
            <p class="lead">Balas de chocolate, feitas com muita paixão e sentimento!</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">E por fim! que tal um bolo? <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Este bolo de chocolate, feito com muito amor e carinho, pronto para ser apreciado!</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

@endsection