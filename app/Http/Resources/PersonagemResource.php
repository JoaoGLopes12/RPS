<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonagemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,

            'nome' => $this->nome,

            'nivel' => $this->nivel,

            'experiencia' => $this->experiencia,

            'hp' => $this->hp,

            'mana' => $this->mana,

            'dinheiro' => $this->dinheiro,

            'jogador' => $this->user->name,

            'raca' => $this->raca->nome,

            'classe' => $this->classe->nome,

            'atributos' => [
                
            'forca' => $this->forca_final,

            'destreza' => $this->destreza_final,

            'constituicao' => $this->constituicao_final,

            'inteligencia' => $this->inteligencia_final,

            'sabedoria' => $this->sabedoria_final,

            'carisma' => $this->carisma_final,

        ]

            'inventario' => $this->itens->map(function ($item) {

                return [

                    'nome' => $item->nome,

                    'raridade' => $item->raridade,

                    'valor' => $item->valor

                ];

            })
        ];
    }
}