<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['nome', 'descricao', 'departamento_id'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
