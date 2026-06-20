<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemApiController extends Controller
{
    public function index()
    {
        return response()->json(
            Item::all(),
            200
        );
    }

    public function show($id)
    {
        return response()->json(
            Item::findOrFail($id),
            200
        );
    }
}