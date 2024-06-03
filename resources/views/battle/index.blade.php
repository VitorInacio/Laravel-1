@extends('app')
@section('title', 'Battle Pokemon')
@section('content')

<div class="container">
    <h1>Batalha Pokemon</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('battle.search') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pokemon1">1º Pokemon:</label>
            <input type="text" id="pokemon1" name="pokemon1" class="form-control" required placeholder="Ex: pikachu">
        </div>
        <br>
        <div class="form-group">
            <label for="pokemon2">2º Pokemon:</label>
            <input type="text" id="pokemon2" name="pokemon2" class="form-control" required placeholder="Ex: charmander">
        </div>

        <button type="submit" class="btn btn-success">Lutar!</button>
    </form>

    @isset($winner)
        <h2>Resultado da Batalha</h2>
        <p>1º Pokemon: {{ $pokemon1 }} (Ataque: {{ $attack1 }})</p>
        <p>2º Pokemon: {{ $pokemon2 }} (Ataque: {{ $attack2 }})</p>
        <p><strong>Vencedor: {{ $winner }}</strong></p>
    @endisset
</div>

@endsection
