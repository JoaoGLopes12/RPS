<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();

        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        Classe::create($request->all());

        return redirect()
            ->route('classes.index')
            ->with('success', 'Classe criada com sucesso!');
    }

    public function show(Classe $classe)
    {
        return view('classes.show', compact('classe'));
    }

    public function edit(Classe $classe)
    {
        return view('classes.edit', compact('classe'));
    }

    public function update(Request $request, Classe $classe)
    {
        $classe->update($request->all());

        return redirect()
            ->route('classes.index')
            ->with('success', 'Classe atualizada!');
    }

    public function destroy(Classe $classe)
    {
        $classe->delete();

        return redirect()
            ->route('classes.index')
            ->with('success', 'Classe removida!');
    }
}