<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Personagem;
use App\Models\Raca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonagemController extends Controller
{
    public function index()
    {
        $personagens = Personagem::with([
            'raca',
            'classe'
        ])->where(
            'user_id',
            Auth::id()
        )->get();

        return view(
            'personagens.index',
            compact('personagens')
        );
    }

    public function create()
    {
        $racas = Raca::all();
        $classes = Classe::all();

        return view(
            'personagens.create',
            compact(
                'racas',
                'classes'
            )
        );
    }

    public function store(Request $request)
    {
        $personagem = new Personagem();

        $personagem->user_id = Auth::id();

        $personagem->nome = $request->nome;

        $personagem->nivel = 1;

        $personagem->experiencia = 0;

        $personagem->raca_id = $request->raca_id;

        $personagem->classe_id = $request->classe_id;

        $personagem->forca_base = $request->forca_base;
        $personagem->destreza_base = $request->destreza_base;
        $personagem->constituicao_base = $request->constituicao_base;
        $personagem->inteligencia_base = $request->inteligencia_base;
        $personagem->sabedoria_base = $request->sabedoria_base;
        $personagem->carisma_base = $request->carisma_base;

        $classe = Classe::find($request->classe_id);

        $personagem->hp = 100 + $classe->bonus_hp;
        $personagem->mana = 50 + $classe->bonus_mana;

        $personagem->dinheiro = 0;

        $personagem->save();

        return redirect()
            ->route('personagens.index')
            ->with('success', 'Personagem criado!');
    }

    public function show(Personagem $personagem)
    {
        return view(
            'personagens.show',
            compact('personagem')
        );
    }

    public function edit(Personagem $personagem)
    {
        $racas = Raca::all();
        $classes = Classe::all();

        return view(
            'personagens.edit',
            compact(
                'personagem',
                'racas',
                'classes'
            )
        );
    }

    public function update(
        Request $request,
        Personagem $personagem
    )
    {
        $personagem->update($request->all());

        return redirect()
            ->route('personagens.index')
            ->with('success', 'Personagem atualizado!');
    }

    public function destroy(Personagem $personagem)
    {
        $personagem->delete();

        return redirect()
            ->route('personagens.index')
            ->with('success', 'Personagem removido!');
    }
}