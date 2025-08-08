<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Departamentos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Vite -->
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-900">
    

    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Bem-vindo ao sistema de departamentos</h1>

        {{-- Componente de listagem de departamentos --}}
        @livewire('departamento-list')

        <hr class="my-6">

        {{-- Componente de cadastro de itens por departamento --}}
        @livewire('departamento-component')
    </div>

    @livewireScripts
</body>
</html>
