<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $itens = Item::all();

        return view('itens.index', compact('itens'));
    }

    public function create()
    {
        return view('itens.create');
    }

    public function store(Request $request)
    {
        Item::create($request->all());

        return redirect()
            ->route('itens.index')
            ->with('success', 'Item criado!');
    }

    public function show(Item $item)
    {
        return view('itens.show', compact('item'));
    }

    public function edit(Item $item)
    {
        return view('itens.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $item->update($request->all());

        return redirect()
            ->route('itens.index')
            ->with('success', 'Item atualizado!');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()
            ->route('itens.index')
            ->with('success', 'Item removido!');
    }
}