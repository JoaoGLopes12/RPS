@extends('layouts.app')

@section('content')

<h1>NPCs</h1>

<a href="{{ route('npcs.create') }}">
Novo NPC
</a>

<table border="1">

<tr>
<th>Nome</th>
<th>Nível</th>
<th>Raça</th>
<th>Classe</th>
</tr>

@foreach($npcs as $npc)

<tr>

<td>{{ $npc->nome }}</td>

<td>{{ $npc->nivel }}</td>

<td>{{ $npc->raca->nome }}</td>

<td>{{ $npc->classe->nome }}</td>

</tr>

@endforeach

</table>

@endsection