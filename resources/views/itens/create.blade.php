@extends('layouts.app')

@section('content')

<h1>Novo Item</h1>

<form action="{{ route('itens.store') }}"
      method="POST">

@csrf

<input type="text"
       name="nome"
       placeholder="Nome">

<br><br>

<textarea name="descricao"></textarea>

<br><br>

<select name="raridade">

<option>Comum</option>
<option>Incomum</option>
<option>Raro</option>
<option>Épico</option>
<option>Lendário</option>

</select>

<br><br>

<input type="number"
       step="0.01"
       name="valor"
       placeholder="Valor">

<br><br>

<button type="submit">
Salvar
</button>

</form>

@endsection