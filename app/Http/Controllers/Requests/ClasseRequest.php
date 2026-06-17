<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClasseRequest extends FormRequest
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
            'bonus_hp' => 'required|integer|min:0',
            'bonus_mana' => 'required|integer|min:0',
            'bonus_forca' => 'required|integer',
            'bonus_destreza' => 'required|integer',
            'bonus_constituicao' => 'required|integer',
            'bonus_inteligencia' => 'required|integer',
            'bonus_sabedoria' => 'required|integer',
            'bonus_carisma' => 'required|integer'
        ];
    }
}