@extends('layouts.app')

@section('content')

<h1>Relatórios</h1>

<ul>
    <li><a href="{{ route('relatorios.personagens') }}">Personagens (PDF)</a></li>
    <li><a href="{{ route('relatorios.npcs') }}">NPCs (PDF)</a></li>
    <li><a href="{{ route('relatorios.itens') }}">Itens (PDF)</a></li>
</ul>

@endsection
