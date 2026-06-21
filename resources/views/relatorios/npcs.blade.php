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

<h1>Relatório de NPCs</h1>

<table>
<tr>
<th>Nome</th>
<th>Raça</th>
<th>Classe</th>
<th>Nível</th>
<th>HP</th>
<th>Mana</th>
</tr>
@foreach($npcs as $npc)
<tr>
<td>{{ $npc->nome }}</td>
<td>{{ $npc->raca->nome ?? '' }}</td>
<td>{{ $npc->classe->nome ?? '' }}</td>
<td>{{ $npc->nivel }}</td>
<td>{{ $npc->hp }}</td>
<td>{{ $npc->mana }}</td>
</tr>
@endforeach

</table>

</body>

</html>