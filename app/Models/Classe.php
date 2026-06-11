<?php

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{

    protected $fillable = [
        'nome',
        'descricao',
        'bonus_hp',
        'bonus_mana',
        'bonus_forca',
        'bonus_destreza',
        'bonus_constituicao',
        'bonus_inteligencia',
        'bonus_sabedoria',
        'bonus_carisma'
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