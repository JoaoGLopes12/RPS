@extends('layouts.app')

@section('content')

<h1>Editar Classe</h1>

<form action="{{ route('classes.update',$classe->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="nome"
           value="{{ $classe->nome }}">

    <br><br>

    <textarea name="descricao">{{ $classe->descricao }}</textarea>

    <br><br>

    <input type="number"
           name="bonus_hp"
           value="{{ $classe->bonus_hp }}">

    <input type="number"
           name="bonus_mana"
           value="{{ $classe->bonus_mana }}">

    <br><br>

    <button type="submit">
        Atualizar
    </button>

</form>

@endsection