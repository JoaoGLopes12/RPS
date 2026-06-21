@extends('layouts.app')

@section('content')

<h1>Adicionar Item ao Personagem</h1>

<form action="{{ route('personagem-itens.store') }}" method="POST">
    @csrf

    <select name="personagem_id">
        @foreach($personagens as $p)
            <option value="{{ $p->id }}">{{ $p->nome }}</option>
        @endforeach
    </select>

    <select name="item_id">
        @foreach($itens as $i)
            <option value="{{ $i->id }}">{{ $i->nome }}</option>
        @endforeach
    </select>

    <input type="number" name="quantidade" value="1" min="1">

    <button type="submit">Adicionar</button>

</form>

@endsection
