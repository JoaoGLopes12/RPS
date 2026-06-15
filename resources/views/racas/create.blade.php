<!DOCTYPE html>
<html>
<head>
    <title>Nova Raça</title>
</head>
<body>

<h1>Cadastrar Raça</h1>

<form action="{{ route('racas.store') }}"
      method="POST">

    @csrf

    <label>Nome</label>

    <input type="text"
           name="nome">

    <br><br>

    <label>Descrição</label>

    <textarea name="descricao"></textarea>

    <br><br>

    <label>Tamanho</label>

    <input type="text"
           name="tamanho">

    <br><br>

    <h3>Bônus</h3>

    <input type="number"
           name="bonus_forca"
           placeholder="Força">

    <input type="number"
           name="bonus_destreza"
           placeholder="Destreza">

    <input type="number"
           name="bonus_constituicao"
           placeholder="Constituição">

    <input type="number"
           name="bonus_inteligencia"
           placeholder="Inteligência">

    <input type="number"
           name="bonus_sabedoria"
           placeholder="Sabedoria">

    <input type="number"
           name="bonus_carisma"
           placeholder="Carisma">

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>

</body>
</html>