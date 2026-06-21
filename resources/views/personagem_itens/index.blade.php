@extends('layouts.app')

@section('content')

<h1>Itens dos Personagens</h1>

<a href="{{ route('personagem-itens.create') }}">Adicionar Item</a>

<table border="1">
    <tr>
        <th>Personagem</th>
        <th>Item</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>

    @foreach($personagemItens as $pi)
    <tr>
        <td>{{ $pi->personagem->nome }}</td>
        <td>{{ $pi->item->nome }}</td>
        <td>{{ $pi->quantidade }}</td>
        <td>
            <a href="{{ route('personagem-itens.edit', $pi->id) }}">Editar</a>
            <form action="{{ route('personagem-itens.destroy', $pi->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection
