<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    
    public function index()
    {
        $departamentos = Departamento::all();
        return response()->json($departamentos);
    }

    
    public function show($id)
    {
        $departamento = Departamento::with('itens')->find($id);
        if (!$departamento) {
            return response()->json(['message' => 'Departamento não encontrado'], 404);
        }
        return response()->json($departamento);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $departamento = Departamento::create($request->all());
        return response()->json($departamento, 201);
    }

    
    public function update(Request $request, $id)
    {
        $departamento = Departamento::find($id);
        if (!$departamento) {
            return response()->json(['message' => 'Departamento não encontrado'], 404);
        }

        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $departamento->update($request->all());
        return response()->json($departamento);
    }

    
    public function destroy($id)
    {
        $departamento = Departamento::find($id);
        if (!$departamento) {
            return response()->json(['message' => 'Departamento não encontrado'], 404);
        }

        $departamento->delete();
        return response()->json(['message' => 'Departamento excluído com sucesso']);
    }

    
    public function visualizar($id)
    {
        $departamento = Departamento::with('itens')->findOrFail($id);
        return view('departamento', compact('departamento'));
    }
}
