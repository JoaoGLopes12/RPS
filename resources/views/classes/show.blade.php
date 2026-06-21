@extends('layouts.app')

@section('content')

<h1>Detalhes da Classe</h1>

<p>Nome: {{ $classe->nome }}</p>
<p>Descrição: {{ $classe->descricao }}</p>
<p>Bônus HP: {{ $classe->bonus_hp }}</p>
<p>Bônus Mana: {{ $classe->bonus_mana }}</p>

<a href="{{ route('classes.index') }}">Voltar</a>

@endsection
