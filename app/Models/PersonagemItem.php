<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonagemItem extends Model
{
    protected $table = 'personagem_item';

    protected $fillable = [
        'personagem_id',
        'item_id',
        'quantidade'
    ];

    public function personagem()
    {
        return $this->belongsTo(Personagem::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}