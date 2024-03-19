@extends('app')
@section('title', 'Cadastar clientes')
@section('content')

<h1>Cadastar novo cliente</h1>

<form action="{{ route('clients.store') }}" method="POST" >
    @csrf
    <div class="mb-3">
        <label for="Nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
    </div>

    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço">
    </div>

    <div class="mb-3">
        <label for="observacao" class="form-label">Observação:</label>
        <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite uma Observação" ></textarea>
    </div>

    <button type="submit" class="btn btn-success">Cadastrar</button>
    <a href="{{route('clients.index')}}" class="btn btn-danger">Voltar</a>

</form>


@endsection
