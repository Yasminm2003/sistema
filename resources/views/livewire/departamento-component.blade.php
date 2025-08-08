<<div class="p-4">
    <h2 class="text-xl font-semibold mb-4">Cadastrar Item por Departamento</h2>

    <form wire:submit.prevent="cadastrarItem" class="space-y-4 mb-6">
        <div>
            <label class="block font-medium">Departamento</label>
            <select wire:model="departamento_id" class="w-full border rounded p-2">
                <option value="">Selecione</option>
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento->nome }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block font-medium">Nome do Item</label>
            <input type="text" wire:model="nome" class="w-full border rounded p-2" />
        </div>

        <div>
            <label class="block font-medium">Descrição</label>
            <textarea wire:model="descricao" class="w-full border rounded p-2"></textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Adicionar Item
        </button>
    </form>

    @foreach($departamentos as $departamento)
        <div class="border p-4 mb-2">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-bold">{{ $departamento->nome }}</h2>
                <button wire:click="toggle({{ $departamento->id }})">
                    {{ $expanded[$departamento->id] ?? false ? 'Fechar' : 'Ver Itens' }}
                </button>
            </div>

            @if($expanded[$departamento->id] ?? false)
                <ul class="mt-2 list-disc pl-5">
                    @forelse($departamento->itens as $item)
                        <li>{{ $item->nome }} — {{ $item->descricao }}</li>
                    @empty
                        <li>Nenhum item cadastrado</li>
                    @endforelse
                </ul>
            @endif
        </div>
    @endforeach
</div>
