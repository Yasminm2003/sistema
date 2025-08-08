<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-white shadow p-4 mb-6">
        <h1 class="text-xl font-bold">Sistema de Departamentos</h1>
    </header>

    <main class="container mx-auto px-4">
        @yield('content')
    </main>
</body>
</html>
