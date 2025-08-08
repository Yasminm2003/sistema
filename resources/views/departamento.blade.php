<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Departamentos</title>
    @vite('resources/js/app.js')
</head>
<body>
    {{-- Mensagem de sucesso --}}
    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin: 15px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Formulário para adicionar item --}}
    <h2 style="margin-left: 15px;">Adicionar Item ao Departamento</h2>
    <form method="POST" action="{{ route('itens.store', $departamento->id) }}" style="margin: 15px;">
        @csrf

        <div style="margin-bottom: 10px;">
            <label for="nome">Nome do Item:</label><br>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao"></textarea>
        </div>

        <button type="submit">Salvar</button>
    </form>

    {{-- Vue app --}}
    <div id="app"></div>
</body>
</html>
