<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NpcRequest extends FormRequest
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
            'nivel' => 'required|integer|min:1',
            'hp' => 'required|integer|min:0',
            'mana' => 'required|integer|min:0',
            'dinheiro' => 'required|numeric|min:0',
            'raca_id' => 'required|exists:racas,id',
            'classe_id' => 'required|exists:classes,id'
        ];
    }
}