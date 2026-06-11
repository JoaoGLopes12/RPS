<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Npc extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'nivel',
        'hp',
        'mana',
        'dinheiro',
        'raca_id',
        'classe_id'
    ];

    public function raca()
    {
        return $this->belongsTo(Raca::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}