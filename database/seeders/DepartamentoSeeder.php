<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    public function run()
    {
        Departamento::create([
            'nome' => 'Itens Do Departamento',
            'descricao' => 'Itens Cadastrados'
        ]);
    }
}