<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PersonagemResource;
use App\Models\Personagem;

class PersonagemApiController extends Controller
{
    public function index()
    {
        return PersonagemResource::collection(

            Personagem::with([
                'user',
                'raca',
                'classe',
                'itens'
            ])->get()

        );
    }

    public function show($id)
    {
        return new PersonagemResource(

            Personagem::with([
                'user',
                'raca',
                'classe',
                'itens'
            ])->findOrFail($id)

        );
    }
}