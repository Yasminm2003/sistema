<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['nome', 'descricao'];

    // Relacionamento: um departamento tem muitos itens
    public function itens()
    {
        return $this->hasMany(Item::class);
    }
}

