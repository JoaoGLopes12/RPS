<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Classe;

class ClasseApiController extends Controller
{
    public function index()
    {
        return response()->json(
            Classe::all(),
            200
        );
    }

    public function show($id)
    {
        return response()->json(
            Classe::findOrFail($id),
            200
        );
    }
}