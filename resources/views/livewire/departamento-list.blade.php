<div style="max-width: 600px; margin: auto;">
    <h2> Lista de Departamentos</h2>

    {{-- Formulário de cadastro --}}
    <form wire:submit.prevent="salvar" style="margin-bottom: 20px;">
        <div>
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" wire:model="nome" placeholder="Nome do departamento">
            @error('nome') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-top: 10px;">
            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" wire:model="descricao" placeholder="Descrição (opcional)"></textarea>
        </div>

        <button type="submit" style="margin-top: 10px;">Salvar</button>
    </form>

    {{-- Lista de departamentos --}}
    <h2 class="text-xl font-bold mb-4">Lista de Departamentos</h2>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @foreach ($departamentos as $departamento)
        <div class="border rounded-lg p-4 bg-white shadow-sm">
            <h3 class="text-lg font-semibold text-gray-800">{{ $departamento->nome }}</h3>
            <p class="text-sm text-gray-600">{{ $departamento->descricao }}</p>
            
        </div>
    @endforeach
</div>

</div>
