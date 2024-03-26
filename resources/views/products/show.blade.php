@extends('app')
@section('title', 'Lista de Produtos')
@section('content')

<div class="card">
    <div class="card-header">
        Detalhes do Produto {{ $product->nome }}
    </div>
</div>

<div class="card-body">
    <p><strong>ID: </strong> {{ $product->id }} </p>
    <p><strong>Nome: </strong> {{ $product->nome }} </p>
    <p><strong>Quantidade: </strong> {{ $product->quantidade }} </p>
    <p><strong>Preço: </strong> {{ $product->preco }} </p>
    <br>
    <a href="{{route('products.index')}}" class="btn btn-success">Voltar</a>
</div>

@endsection
