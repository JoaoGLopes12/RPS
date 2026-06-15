<!DOCTYPE html>
<html>
<head>
    <title>Raças</title>
</head>
<body>

    <h1>Lista de Raças</h1>

    <a href="{{ route('racas.create') }}">
        Nova Raça
    </a>

    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tamanho</th>
            <th>Ações</th>
        </tr>

        @foreach($racas as $raca)

        <tr>

            <td>{{ $raca->id }}</td>

            <td>{{ $raca->nome }}</td>

            <td>{{ $raca->tamanho }}</td>

            <td>

                <a href="{{ route('racas.edit', $raca->id) }}">
                    Editar
                </a>

                <form action="{{ route('racas.destroy', $raca->id) }}"
                      method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Excluir
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</body>
</html>