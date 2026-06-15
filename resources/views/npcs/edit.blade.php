@extends('layouts.app')

@section('content')

<h1>Editar NPC</h1>

<form action="{{ route('npcs.update', $npc->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="nome"
           value="{{ $npc->nome }}">

    <br><br>

    <select name="raca_id">

        @foreach($racas as $raca)

        <option value="{{ $raca->id }}"
            {{ $npc->raca_id == $raca->id ? 'selected' : '' }}>

            {{ $raca->nome }}

        </option>

        @endforeach

    </select>

    <br><br>

    <select name="classe_id">

        @foreach($classes as $classe)

        <option value="{{ $classe->id }}"
            {{ $npc->classe_id == $classe->id ? 'selected' : '' }}>

            {{ $classe->nome }}

        </option>

        @endforeach

    </select>

    <br><br>

    <button type="submit">
        Atualizar
    </button>

</form>

@endsection