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

<h1>Relatório de Itens</h1>

<table>
<tr>
<th>Nome</th>
<th>Raridade</th>
<th>Valor</th>
</tr>
@foreach($itens as $item)
<tr>
<td>{{ $item->nome }}</td>
<td>{{ $item->raridade }}</td>
<td>{{ $item->valor }}</td>
</tr>
@endforeach

</table>

</body>

</html>