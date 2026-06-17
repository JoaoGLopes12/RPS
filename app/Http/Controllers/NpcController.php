<?php

namespace App\Http\Controllers;

use App\Models\Npc;
use App\Models\Classe;
use App\Models\Raca;
use Illuminate\Http\Request;

class NpcController extends Controller
{
    public function index()
    {
        $npcs = Npc::with(['raca','classe'])->get();

        return view('npcs.index', compact('npcs'));
    }

    public function create()
    {
        $racas = Raca::all();
        $classes = Classe::all();

        return view('npcs.create', compact(
            'racas',
            'classes'
        ));
    }

    public function store(Request $request)
    {
        Npc::create($request->all());

        return redirect()
            ->route('npcs.index')
            ->with('success', 'NPC criado!');
    }

    public function show(Npc $npc)
    {
        return view('npcs.show', compact('npc'));
    }

    public function edit(Npc $npc)
    {
        $racas = Raca::all();
        $classes = Classe::all();

        return view('npcs.edit', compact(
            'npc',
            'racas',
            'classes'
        ));
    }

    public function update(Request $request, Npc $npc)
    {
        $npc->update($request->all());

        return redirect()
            ->route('npcs.index')
            ->with('success', 'NPC atualizado!');
    }

    public function destroy(Npc $npc)
    {
        $npc->delete();

        return redirect()
            ->route('npcs.index')
            ->with('success', 'NPC removido!');
    }
}