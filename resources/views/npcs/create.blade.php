@extends('layouts.app')

@section('content')

<h1>Novo NPC</h1>

<form action="{{ route('npcs.store') }}"
      method="POST">

@csrf

<input type="text"
       name="nome">

<br><br>

<select name="raca_id">

@foreach($racas as $raca)

<option value="{{ $raca->id }}">
    {{ $raca->nome }}
</option>

@endforeach

</select>

<br><br>

<select name="classe_id">

@foreach($classes as $classe)

<option value="{{ $classe->id }}">
    {{ $classe->nome }}
</option>

@endforeach

</select>

<br><br>

<button type="submit">
Salvar
</button>

</form>

@endsection