<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
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
}