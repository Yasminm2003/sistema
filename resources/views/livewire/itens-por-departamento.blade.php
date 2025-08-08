<div class="p-4">
    <h2 class="text-xl font-bold mb-4">Itens do Departamento: {{ $departamento->nome }}</h2>

    @foreach ($itens as $item)
        <div class="border p-3 rounded mb-2 bg-gray-100">
            <h3 class="font-semibold">{{ $item->nome }}</h3>
            <p class="text-sm text-gray-600">{{ $item->descricao }}</p>
            <button wire:click="excluir({{ $item->id }})" class="text-red-600 hover:underline mt-2">Excluir</button>
        </div>
    @endforeach
</div>
