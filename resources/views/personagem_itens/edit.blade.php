@extends('layouts.app')

@section('content')

<h1>Editar Item do Personagem</h1>

<form action="{{ route('personagem-itens.update', $personagemItem->id) }}" method="POST">
    @csrf
    @method('PUT')

    <select name="personagem_id">
        @foreach($personagens as $p)
            <option value="{{ $p->id }}" {{ $personagemItem->personagem_id == $p->id ? 'selected' : '' }}>{{ $p->nome }}</option>
        @endforeach
    </select>

    <select name="item_id">
        @foreach($itens as $i)
            <option value="{{ $i->id }}" {{ $personagemItem->item_id == $i->id ? 'selected' : '' }}>{{ $i->nome }}</option>
        @endforeach
    </select>

    <input type="number" name="quantidade" value="{{ $personagemItem->quantidade }}" min="1">

    <button type="submit">Atualizar</button>

</form>

@endsection
