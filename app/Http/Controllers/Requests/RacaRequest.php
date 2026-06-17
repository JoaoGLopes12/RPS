<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RacaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|min:3|max:50',
            'descricao' => 'required|min:10',
            'tamanho' => 'required|max:20',

            'bonus_forca' => 'required|integer',
            'bonus_destreza' => 'required|integer',
            'bonus_constituicao' => 'required|integer',
            'bonus_inteligencia' => 'required|integer',
            'bonus_sabedoria' => 'required|integer',
            'bonus_carisma' => 'required|integer',
        ];
    }
}