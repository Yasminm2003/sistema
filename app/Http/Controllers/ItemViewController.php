<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemViewController extends Controller
{
    public function create($departamentoId)
    {
        return view('itens.create', compact('departamentoId'));
    }
}
