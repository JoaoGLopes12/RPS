<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Raca;

class RacaApiController extends Controller
{
    public function index()
    {
        return response()->json(
            Raca::all(),
            200
        );
    }

    public function show($id)
    {
        return response()->json(
            Raca::findOrFail($id),
            200
        );
    }
}