<h2>Adicionar Item ao Departamento</h2>

<form action="{{ route('itens.store', $departamentoId) }}" method="POST">
    @csrf

    <label for="nome">Nome do Item:</label>
    <input type="text" name="nome" id="nome" required>

    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao"></textarea>

    <input type="hidden" name="departamento_id" value="{{ $departamentoId }}">

    <button type="submit">Salvar</button>
</form>
