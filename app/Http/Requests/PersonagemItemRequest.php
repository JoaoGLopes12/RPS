<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonagemItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'personagem_id' => 'required|exists:personagens,id',
            'item_id' => 'required|exists:itens,id',
            'quantidade' => 'required|integer|min:1'
        ];
    }
}