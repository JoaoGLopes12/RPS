@extends('layouts.app')

@section('content')

<h1>Criar Personagem</h1>

<form action="{{ route('personagens.store') }}"
      method="POST">

@csrf

<input type="text"
       name="nome"
       placeholder="Nome">

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

<hr>

<h3>Distribuição de Pontos</h3>

Força

<input type="number"
       name="forca_base">

<br>

Destreza

<input type="number"
       name="destreza_base">

<br>

Constituição

<input type="number"
       name="constituicao_base">

<br>

Inteligência

<input type="number"
       name="inteligencia_base">

<br>

Sabedoria

<input type="number"
       name="sabedoria_base">

<br>

Carisma

<input type="number"
       name="carisma_base">

<br><br>

<button type="submit">
Criar Personagem
</button>

</form>

@endsection