<form action="{{ route('racas.update', $raca->id) }}"
      method="POST">

    @csrf

    @method('PUT')

    <input type="text"
           name="nome"
           value="{{ $raca->nome }}">

    <textarea name="descricao">
        {{ $raca->descricao }}
    </textarea>

    <input type="text"
           name="tamanho"
           value="{{ $raca->tamanho }}">

    <button type="submit">
        Atualizar
    </button>

</form>