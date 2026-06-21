@extends('layouts.app')

@section('content')

<h1>Detalhes do Item</h1>

<p>Nome: {{ $item->nome }}</p>
<p>Descrição: {{ $item->descricao }}</p>
<p>Raridade: {{ $item->raridade }}</p>
<p>Valor: {{ $item->valor }}</p>

<a href="{{ route('itens.index') }}">Voltar</a>

@endsection
