@extends('app')
@section('title', 'Lista de Clientes')
@section('content')

<h1>Lista de Clientes</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <th>{{ $client->id }}</th>
                        <td>
                            <a href="{{ route('clients.show', $client) }}">{{ $client->nome }}</a>
                        </td>
                        <td>{{ $client->endereco }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('clients.edit', $client) }}">Atualizar</a>

                            <form action="{{ route('clients.destroy', $client) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button
                                    class="btn btn-danger"
                                    type="submit"
                                    onclick="return confirm('Tem certeza?')"
                                >
                                    Apagar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
<a class="btn btn-success" href="{{ route('clients.create') }}">
    Cadastrar cliente
</a>
@endsection
