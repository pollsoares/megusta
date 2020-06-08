@extends('site.master.layout')
@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
    <h1 class="display-5">Contato</h1>   
    <p class="lead">Faça seu pedido pelo formulário que entraremos em contato com você!</p>      
    </div>
</div>
    

<div class="container py-5" >
        <form>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="nome" class="form-control" id="nome" aria-describedby="nome">                
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">               
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone">
            </div>            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection