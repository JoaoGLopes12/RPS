@extends('layouts.app')

@section('content')

<form action="{{ route('itens.update',$item->id) }}"
      method="POST">

@csrf
@method('PUT')

<input type="text"
       name="nome"
       value="{{ $item->nome }}">

<textarea name="descricao">{{ $item->descricao }}</textarea>

<select name="raridade">

<option {{ $item->raridade == 'Comum' ? 'selected' : '' }}>Comum</option>
<option {{ $item->raridade == 'Incomum' ? 'selected' : '' }}>Incomum</option>
<option {{ $item->raridade == 'Raro' ? 'selected' : '' }}>Raro</option>
<option {{ $item->raridade == 'Épico' ? 'selected' : '' }}>Épico</option>
<option {{ $item->raridade == 'Lendário' ? 'selected' : '' }}>Lendário</option>

</select>

<input type="number"
       step="0.01"
       name="valor"
       value="{{ $item->valor }}">

<button type="submit">
Atualizar
</button>

</form>

@endsection