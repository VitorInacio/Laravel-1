@extends('app')
@section('title', 'Procurar CEP')
@section('content')

<h1>Buscando CEP</h1>

<form action="{{ route('viacep.search') }}" method="POST">
    @csrf
    <br>
    <div class="mb-3">
        <input type="number" class="form-control" id="cep" name="cep" placeholder="Digite o CEP" maxlength="8" required>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Buscar</button>
    </div>
</form>

@if (isset($cepInfo['cep']))

    <h2>Informações do CEP</h2>

    <ul>
        <li><strong>CEP:</strong> {{$cepInfo['cep']}}</li>
        <li><strong>Logradouro:</strong> {{$cepInfo['logradouro']}}</li>
        <li><strong>complemento:</strong> {{$cepInfo['complemento']}}</li>
        <li><strong>Bairro:</strong> {{$cepInfo['bairro']}}</li>
        <li><strong>Localidade:</strong> {{$cepInfo['localidade']}}</li>
        <li><strong>UF:</strong> {{$cepInfo['uf']}}</li>
    </ul>

@endif

@endsection
