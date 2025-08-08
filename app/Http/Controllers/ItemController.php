<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $itens = Item::with('departamento')->get();
        return response()->json($itens);
    }

    public function show($id)
    {
        $item = Item::with('departamento')->find($id);
        if (!$item) {
            return response()->json(['message' => 'Item não encontrado'], 404);
        }
        return response()->json($item);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        $item = Item::create($request->all());

        // Verifica se é uma requisição JSON (API)
        if ($request->wantsJson()) {
            return response()->json($item, 201);
        }

        // Se for requisição web (formulário), redireciona
        return redirect()->route('departamentos.view', $item->departamento_id)
                         ->with('success', 'Item criado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        if (!$item) {
            return response()->json(['message' => 'Item não encontrado'], 404);
        }

        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        if (!$item) {
            return response()->json(['message' => 'Item não encontrado'], 404);
        }

        $item->delete();
        return response()->json(['message' => 'Item excluído com sucesso']);
    }
}
