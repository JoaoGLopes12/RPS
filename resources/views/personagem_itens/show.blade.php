@extends('layouts.app')

@section('content')

<h1>Detalhes do Item do Personagem</h1>

<p>Personagem: {{ $personagemItem->personagem->nome }}</p>
<p>Item: {{ $personagemItem->item->nome }}</p>
<p>Quantidade: {{ $personagemItem->quantidade }}</p>

<a href="{{ route('personagem-itens.index') }}">Voltar</a>

@endsection
