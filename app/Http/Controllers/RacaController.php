<?php

use App\Models\Raca;
use Illuminate\Http\Request;

class RacaController extends Controller

{
    public function index()
    {
        $racas = Raca::all();

        return view('racas.index', compact('racas'));
    }

    public function create()
    {
        return view('racas.create');
    }

    public function store(Request $request)
    {
        Raca::create($request->all());

        return redirect()
            ->route('racas.index');
    }

    public function edit(Raca $raca)
    {
        return view('racas.edit', compact('raca'));
    }

    public function update(Request $request, Raca $raca)
    {
        $raca->update($request->all());

        return redirect()
            ->route('racas.index');
    }

    public function destroy(Raca $raca)
    {
        $raca->delete();

        return redirect()
            ->route('racas.index');
    }
}