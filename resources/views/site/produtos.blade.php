@extends('site.master.layout')
@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-5">Nossos Produtos</h1>      
        <p class="lead">Aqui você encontra os produtos que nós fabricamos</p>
    </div>
</div>

<!-- START THE FEATURETTES -->
<div class="container py-5">

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Trufa caseira. <span class="text-muted">Simplesmente maravilhosa!</span></h2>
        <p class="lead">Trufa caseira fabricada com produtos de qualidade, elaborada com amor e carinho para te proporcionar prazer ao comer!</p>
    </div>
    <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
            role="img" aria-label="Placeholder: 500x500">
            <title>Foto</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">Trufa</text>
        </svg>
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Sim! isto � muito bom! <span class="text-muted">Veja que maravilha.</span></h2>
        <p class="lead">Bombons caseiros, diversos sabores!</p>
    </div>
    <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
            role="img" aria-label="Placeholder: 500x500">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">Bombom</text>
        </svg>
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">E por fim! que tal uma maravilhosa sobremesa! <span class="text-muted">Hum!!!</span></h2>
        <p class="lead">Sorvete caseiro, congelado, feito com nozes, leite condensado e uma deliciosa calda de chocolate</p>
    </div>
    <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
            role="img" aria-label="Placeholder: 500x500">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">Sorvete</text>
        </svg>
    </div>
</div>

<hr class="featurette-divider">
</div>

<!-- /END THE FEATURETTES -->

@endsection