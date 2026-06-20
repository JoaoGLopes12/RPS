<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Item;
use App\Models\Npc;
use App\Models\Personagem;
use App\Models\Raca;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPersonagens = Personagem::count();

        $totalNpcs = Npc::count();

        $totalRacas = Raca::count();

        $totalClasses = Classe::count();

        $totalItens = Item::count();

        return view('dashboard.index', compact(
            'totalPersonagens',
            'totalNpcs',
            'totalRacas',
            'totalClasses',
            'totalItens'
        ));
    }
}