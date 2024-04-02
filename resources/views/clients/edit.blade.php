@extends('app')
@section('title', 'Editar clientes')
@section('content')

<h1>Editar cliente</h1>

<form action="{{ route('clients.update', $client) }}" method="POST" >
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="Nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value="{{ $client->nome }}">
    </div>

    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" value="{{ $client->endereco }}">
    </div>

    <div class="mb-3">
        <label for="observacao" class="form-label">Observação:</label>
        <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite uma Observação"> {{ $client->observacao }} </textarea>
    </div>

    <button type="submit" class="btn btn-success">Cadastrar</button>
    <a href="{{route('clients.index')}}" class="btn btn-danger">Voltar</a>

</form>
@endsection
