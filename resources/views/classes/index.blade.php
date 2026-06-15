@extends('layouts.app')

@section('content')

<h1>Classes</h1>

<a href="{{ route('classes.create') }}">
    Nova Classe
</a>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>HP</th>
        <th>Mana</th>
        <th>Ações</th>
    </tr>

    @foreach($classes as $classe)
    <tr>
        <td>{{ $classe->nome }}</td>
        <td>{{ $classe->bonus_hp }}</td>
        <td>{{ $classe->bonus_mana }}</td>

        <td>
            <a href="{{ route('classes.edit',$classe->id) }}">
                Editar
            </a>

            <form action="{{ route('classes.destroy',$classe->id) }}"
                  method="POST">

                @csrf
                @method('DELETE')

                <button type="submit">
                    Excluir
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection