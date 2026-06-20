@extends('layouts.app')

@section('content')

<h1>Dashboard RPG</h1>

<hr>

<div>

    <h3>Total de Personagens</h3>

    <p>{{ $totalPersonagens }}</p>

</div>

<hr>

<div>

    <h3>Total de NPCs</h3>

    <p>{{ $totalNpcs }}</p>

</div>

<hr>

<div>

    <h3>Total de Raças</h3>

    <p>{{ $totalRacas }}</p>

</div>

<hr>

<div>

    <h3>Total de Classes</h3>

    <p>{{ $totalClasses }}</p>

</div>

<hr>

<div>

    <h3>Total de Itens</h3>

    <p>{{ $totalItens }}</p>

</div>

@endsection