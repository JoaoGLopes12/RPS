<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonagemItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,

            'personagem' => $this->personagem->nome,

            'item' => $this->item->nome,

            'quantidade' => $this->quantidade

        ];
    }
}