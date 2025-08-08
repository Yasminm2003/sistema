<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Departamento;

class DepartamentoList extends Component
{
    public string $nome = '';
    public string $descricao = '';

    public function salvar()
    {
        $this->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
        ]);

        Departamento::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
        ]);

        $this->reset(['nome', 'descricao']);

        session()->flash('message', 'Departamento criado com sucesso!');
    }

    public function render()
    {
        $departamentos = Departamento::all();

        return view('livewire.departamento-list', [
            'departamentos' => $departamentos,
        ]);
    }
}

