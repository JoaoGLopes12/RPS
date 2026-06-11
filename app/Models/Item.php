<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'raridade',
        'peso',
        'valor',
        'bonus_forca',
        'bonus_destreza',
        'bonus_constituicao',
        'bonus_inteligencia',
        'bonus_sabedoria',
        'bonus_carisma',
        'bonus_hp',
        'bonus_mana'
    ];

    public function personagens()
    {
        return $this->belongsToMany(
            Personagem::class,
            'personagem_item'
        )->withPivot('quantidade')
         ->withTimestamps();
    }
}