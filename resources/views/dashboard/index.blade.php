@extends('layouts.app')

@section('content')

<h1>Dashboard</h1>

<div>

<h3>Total de Personagens</h3>

<p>{{ $personagens }}</p>

</div>

<div>

<h3>Total de Classes</h3>

<p>{{ $classes }}</p>

</div>

<div>

<h3>Total de Raças</h3>

<p>{{ $racas }}</p>

</div>

<div>

<h3>Total de Itens</h3>

<p>{{ $itens }}</p>

</div>

@endsection