@extends('layouts.app')

@section('content')

<h1>Editar Personagem</h1>

<form action="{{ route('personagens.update', $personagem->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="nome"
           value="{{ $personagem->nome }}">

    <br><br>

    <button type="submit">
        Atualizar
    </button>

</form>

@endsection