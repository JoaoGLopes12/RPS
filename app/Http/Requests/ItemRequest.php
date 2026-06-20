<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'nome' => 'required|min:3|max:50',
            'descricao' => 'required|min:5',
            'raridade' => 'required',
            'peso' => 'required|numeric|min:0',
            'valor' => 'required|numeric|min:0',
            'bonus_forca' => 'nullable|integer',
            'bonus_destreza' => 'nullable|integer',
            'bonus_constituicao' => 'nullable|integer',
            'bonus_inteligencia' => 'nullable|integer',
            'bonus_sabedoria' => 'nullable|integer',
            'bonus_carisma' => 'nullable|integer',
            'bonus_hp' => 'nullable|integer',
            'bonus_mana' => 'nullable|integer'
        ];
    }
}