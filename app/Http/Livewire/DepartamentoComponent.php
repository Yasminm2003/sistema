<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Departamento;
use App\Models\Item;

class DepartamentoComponent extends Component
{
    public $departamentos = [];
    public $expanded = [];

    public $departamento_id;
    public $nome;
    public $descricao;

    public function mount()
    {
        $this->departamentos = Departamento::with('itens')->get();
    }

    public function cadastrarItem()
    {
        $this->validate([
            'departamento_id' => 'required|exists:departamentos,id',
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        Item::create([
            'departamento_id' => $this->departamento_id,
            'nome' => $this->nome,
            'descricao' => $this->descricao,
        ]);

        $this->reset(['departamento_id', 'nome', 'descricao']);
        $this->departamentos = Departamento::with('itens')->get();
    }

    public function toggle($id)
    {
        $this->expanded[$id] = !($this->expanded[$id] ?? false);
    }

    public function render()
    {
        return view('livewire.departamento-component');
    }
}
