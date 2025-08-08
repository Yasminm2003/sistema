@extends('layouts.app') {{-- Altere se estiver usando outro layout --}}

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded shadow">
    <h1 id="nome" class="text-2xl font-bold mb-2">Carregando...</h1>
    <p id="descricao" class="mb-4 text-gray-700"></p>

    <h2 class="text-xl font-semibold mb-2">Itens:</h2>
    <ul id="itens" class="list-disc pl-5 text-gray-800">
        <li>Carregando itens...</li>
    </ul>

    <a href="/" class="mt-4 inline-block text-blue-600 hover:underline">← Voltar</a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const id = @json($id);

        fetch(`/api/departamentos/${id}`)
            .then(res => res.json())
            .then(data => {
                document.getElementById('nome').textContent = 'Itens do Departamento';
            

                const itensList = document.getElementById('itens');
                itensList.innerHTML = ''; // Limpa o "Carregando..."

                if (data.itens && data.itens.length > 0) {
                    data.itens.forEach(item => {
                        const li = document.createElement('li');
                        li.textContent = `${item.nome} — ${item.descricao}`;
                        itensList.appendChild(li);
                    });
                } else {
                    itensList.innerHTML = '<li>Nenhum item cadastrado</li>';
                }
            })
            .catch(error => {
                console.error('Erro ao buscar departamento:', error);
                document.getElementById('nome').textContent = 'Erro ao carregar';
                document.getElementById('itens').innerHTML = '<li>Não foi possível carregar os itens</li>';
            });
    });
</script>
@endsection