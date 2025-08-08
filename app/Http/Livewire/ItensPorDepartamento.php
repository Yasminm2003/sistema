<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;
use App\Models\Departamento;

class ItensPorDepartamento extends Component
{
    public int $departamentoId;
    public $departamento;
    public $itens;

    public function mount($departamentoId)
    {
        $this->departamentoId = $departamentoId;
        $this->departamento = Departamento::find($departamentoId);
        $this->itens = Item::where('departamento_id', $departamentoId)->get();
    }

    public function excluir($id)
    {
        Item::find($id)?->delete();
        $this->itens = Item::where('departamento_id', $this->departamentoId)->get();
    }

    public function render()
    {
        return view('livewire.itens-por-departamento');
    }
}
