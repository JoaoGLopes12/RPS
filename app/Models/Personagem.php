<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Personagem extends Model
{
    protected $fillable = [
        'user_id',
        'nome',
        'nivel',
        'experiencia',
        'raca_id',
        'classe_id',
        'forca_base',
        'destreza_base',
        'constituicao_base',
        'inteligencia_base',
        'sabedoria_base',
        'carisma_base',
        'hp',
        'mana',
        'dinheiro'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function raca()
    {
        return $this->belongsTo(Raca::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function itens()
    {
        return $this->belongsToMany(
            Item::class,
            'personagem_item'
        )->withPivot('quantidade')
         ->withTimestamps();
    }
}