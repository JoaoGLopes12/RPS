<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NpcResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,

            'nome' => $this->nome,

            'descricao' => $this->descricao,

            'nivel' => $this->nivel,

            'hp' => $this->hp,

            'mana' => $this->mana,

            'dinheiro' => $this->dinheiro,

            'raca' => $this->raca->nome,

            'classe' => $this->classe->nome
        ];
    }
}