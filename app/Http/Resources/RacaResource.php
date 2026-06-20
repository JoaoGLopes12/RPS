<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RacaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,

            'nome' => $this->nome,

            'descricao' => $this->descricao,

            'tamanho' => $this->tamanho,

            'bonus_forca' => $this->bonus_forca,

            'bonus_destreza' => $this->bonus_destreza,

            'bonus_constituicao' => $this->bonus_constituicao,

            'bonus_inteligencia' => $this->bonus_inteligencia,

            'bonus_sabedoria' => $this->bonus_sabedoria,

            'bonus_carisma' => $this->bonus_carisma
        ];
    }
}