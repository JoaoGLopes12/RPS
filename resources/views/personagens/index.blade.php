@extends('layouts.app')

@section('content')

<h1>Minhas Fichas</h1>

<a href="{{ route('personagens.create') }}">
Nova Ficha
</a>

<table border="1">

<tr>
<th>Nome</th>
<th>Nível</th>
<th>Raça</th>
<th>Classe</th>
</tr>

@foreach($personagens as $personagem)

<tr>

<td>{{ $personagem->nome }}</td>

<td>{{ $personagem->nivel }}</td>

<td>{{ $personagem->raca->nome }}</td>

<td>{{ $personagem->classe->nome }}</td>

</tr>

@endforeach

</table>

@endsection