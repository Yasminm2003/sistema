<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemViewController; // ✅ Novo controller para views

// Rota da API que retorna JSON
Route::get('/departamentos/{id}', [DepartamentoController::class, 'show'])->name('departamentos.show');

// Rota da página Blade que consome a API via JavaScript
Route::get('/departamentos/view/{id}', function ($id) {
    return view('departamentos.view', ['id' => $id]);
})->name('departamentos.view');

// ✅ Rota para exibir o formulário Blade
Route::get('/departamentos/{departamento}/itens/create', [ItemViewController::class, 'create'])->name('itens.create');

// ✅ Rota para salvar o item via API
Route::post('/departamentos/{departamento}/itens', [ItemController::class, 'store'])->name('itens.store');

// Página principal
Route::get('/', function () {
    return view('app');
});

// ✅ Rota para exibir o componente Livewire
Route::get('/livewire/departamentos', function () {
    return view('inicio');
    
})->name('livewire.departamentos');
Route::get('/', function () {
    return view('welcome');
});
