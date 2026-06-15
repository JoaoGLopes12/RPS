@extends('layouts.app')

@section('content')

<h1>Itens</h1>

<a href="{{ route('itens.create') }}">
    Novo Item
</a>

<table border="1">

<tr>
    <th>Nome</th>
    <th>Raridade</th>
    <th>Valor</th>
    <th>Ações</th>
</tr>

@foreach($itens as $item)

<tr>

<td>{{ $item->nome }}</td>

<td>{{ $item->raridade }}</td>

<td>{{ $item->valor }}</td>

<td>

<a href="{{ route('itens.edit',$item->id) }}">
Editar
</a>

</td>

</tr>

@endforeach

</table>

@endsection