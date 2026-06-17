<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use App\Models\Item;
use App\Models\PersonagemItem;
use Illuminate\Http\Request;

class PersonagemItemController extends Controller
{
    public function index()
    {
        $personagemItens = PersonagemItem::with([
            'personagem',
            'item'
        ])->get();

        return view(
            'personagem_itens.index',
            compact('personagemItens')
        );
    }

    public function create()
    {
        $personagens = Personagem::all();
        $itens = Item::all();

        return view(
            'personagem_itens.create',
            compact(
                'personagens',
                'itens'
            )
        );
    }

    public function store(Request $request)
    {
        PersonagemItem::create([
            'personagem_id' => $request->personagem_id,
            'item_id' => $request->item_id,
            'quantidade' => $request->quantidade
        ]);

        return redirect()
            ->route('personagem-itens.index')
            ->with(
                'success',
                'Item adicionado ao personagem.'
            );
    }

    public function show(PersonagemItem $personagemItem)
    {
        return view(
            'personagem_itens.show',
            compact('personagemItem')
        );
    }

    public function edit(PersonagemItem $personagemItem)
    {
        $personagens = Personagem::all();
        $itens = Item::all();

        return view(
            'personagem_itens.edit',
            compact(
                'personagemItem',
                'personagens',
                'itens'
            )
        );
    }

    public function update(
        Request $request,
        PersonagemItem $personagemItem
    )
    {
        $personagemItem->update([
            'personagem_id' => $request->personagem_id,
            'item_id' => $request->item_id,
            'quantidade' => $request->quantidade
        ]);

        return redirect()
            ->route('personagem-itens.index')
            ->with(
                'success',
                'Inventário atualizado.'
            );
    }

    public function destroy(PersonagemItem $personagemItem)
    {
        $personagemItem->delete();

        return redirect()
            ->route('personagem-itens.index')
            ->with(
                'success',
                'Item removido do inventário.'
            );
    }
}