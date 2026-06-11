<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{

    protected $fillable = [
        'nome',
        'descricao',
        'bonus_forca',
        'bonus_destreza',
        'bonus_constituicao',
        'bonus_inteligencia',
        'bonus_sabedoria',
        'bonus_carisma',
        'tamanho'
    ];

    public function personagens()
    {
        return $this->hasMany(Personagem::class);
    }

    public function npcs()
    {
        return $this->hasMany(Npc::class);
    }
}