@extends('layouts.app')

@section('content')

<h1>Nova Classe</h1>

<form action="{{ route('classes.store') }}" method="POST">

    @csrf

    <input type="text" name="nome" placeholder="Nome">

    <br><br>

    <textarea name="descricao"
              placeholder="Descrição"></textarea>

    <br><br>

    <input type="number"
           name="bonus_hp"
           placeholder="Bônus HP">

    <input type="number"
           name="bonus_mana"
           placeholder="Bônus Mana">

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>

@endsection