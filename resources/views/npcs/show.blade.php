@extends('layouts.app')

@section('content')

<h1>Detalhes do NPC</h1>

<p>Nome: {{ $npc->nome }}</p>
<p>Descrição: {{ $npc->descricao }}</p>
<p>Raça: {{ $npc->raca->nome ?? '' }}</p>
<p>Classe: {{ $npc->classe->nome ?? '' }}</p>
<p>Nível: {{ $npc->nivel }}</p>

<a href="{{ route('npcs.index') }}">Voltar</a>

@endsection
