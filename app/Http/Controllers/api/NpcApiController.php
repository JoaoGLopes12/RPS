<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Npc;

class NpcApiController extends Controller
{
    public function index()
    {
        return response()->json(
            Npc::with([
                'raca',
                'classe'
            ])->get(),
            200
        );
    }

    public function show($id)
    {
        return response()->json(
            Npc::with([
                'raca',
                'classe'
            ])->findOrFail($id),
            200
        );
    }
}