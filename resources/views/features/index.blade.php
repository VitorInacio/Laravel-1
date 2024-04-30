@extends('app')
@section('title', 'Lista Feature')
@section('content')

<table>
    <thead>
        <tr>
            <th>Id</th>
            <td>Chave</td>
            <td>Valor</td>
            <td>Descrição</td>
        </tr>
    </thead>
    <tbody>
        @foreach($features as $feature)
            <tr>
                <th>{{$feature->id}}</th>
                <td>
                    <a href="{{ route('features.show', $feature) }}">{{ $feature->chave }}</a>
                </td>
                <td>{{$feature->valor}}</td>
                <td>{{$feature->descricao}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
