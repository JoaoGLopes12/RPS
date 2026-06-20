<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Personagem;

class PersonagemApiController extends Controller
{
    public function index()
    {
        return response()->json(
            Personagem::with([
                'raca',
                'classe',
                'itens',
                'user'
            ])->get(),
            200
        );
    }

    public function show($id)
    {
        return response()->json(
            Personagem::with([
                'raca',
                'classe',
                'itens',
                'user'
            ])->findOrFail($id),
            200
        );
    }
}