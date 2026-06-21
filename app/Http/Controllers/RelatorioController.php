<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use App\Models\Npc;
use App\Models\Item;
use Barryvdh\DomPDF\Facade\Pdf;

class RelatorioController extends Controller
{
    public function personagens()
    {
        $personagens = Personagem::with([
            'raca',
            'classe',
            'user'
        ])->get();

        $pdf = Pdf::loadView(
            'relatorios.personagens',
            compact('personagens')
        );

        return $pdf->download(
            'relatorio_personagens.pdf'
        );
    }

    public function npcs()
    {
        $npcs = Npc::with([
            'raca',
            'classe'
        ])->get();

        $pdf = Pdf::loadView(
            'relatorios.npcs',
            compact('npcs')
        );

        return $pdf->download('relatorio_npcs.pdf');
    }

    public function itens()
    {
        $itens = Item::all();

        $pdf = Pdf::loadView(
            'relatorios.itens',
            compact('itens')
        );

        return $pdf->download('relatorio_itens.pdf');
    }
}
