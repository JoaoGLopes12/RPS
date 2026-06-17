<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonagemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'nome' => 'required|min:3|max:50',
            'raca_id' => 'required|exists:racas,id',
            'classe_id' => 'required|exists:classes,id',
            'forca_base' => 'required|integer|min:0',
            'destreza_base' => 'required|integer|min:0',
            'constituicao_base' => 'required|integer|min:0',
            'inteligencia_base' => 'required|integer|min:0',
            'sabedoria_base' => 'required|integer|min:0',
            'carisma_base' => 'required|integer|min:0',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {

            $total =
                $this->forca_base +
                $this->destreza_base +
                $this->constituicao_base +
                $this->inteligencia_base +
                $this->sabedoria_base +
                $this->carisma_base;

            if ($total > 10) {
                $validator->errors()->add(
                    'atributos',
                    'Você possui apenas 10 pontos para distribuir.'
                );
            }
        });
    }
}