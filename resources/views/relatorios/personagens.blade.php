<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <style>

        body{
            font-family: Arial;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th,td{
            border:1px solid black;
            padding:5px;
        }

    </style>

</head>

<body>

<h1>Relatório de Personagens</h1>

<table>

<tr>

<th>Nome</th>

<th>Jogador</th>

<th>Raça</th>

<th>Classe</th>

<th>Nível</th>

<th>HP</th>

<th>Mana</th>

</tr>

@foreach($personagens as $personagem)

<tr>

<td>{{ $personagem->nome }}</td>

<td>{{ $personagem->user->name }}</td>

<td>{{ $personagem->raca->nome }}</td>

<td>{{ $personagem->classe->nome }}</td>

<td>{{ $personagem->nivel }}</td>

<td>{{ $personagem->hp }}</td>

<td>{{ $personagem->mana }}</td>

</tr>

@endforeach

</table>

</body>

</html>