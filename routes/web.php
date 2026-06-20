<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RacaController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\NpcController;
use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\PersonagemItemController;
use App\Http\Controllers\RelatorioController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('racas', RacaController::class);

    Route::resource('classes', ClasseController::class);

    Route::resource('itens', ItemController::class);

    Route::resource('npcs', NpcController::class);

    Route::resource('personagens', PersonagemController::class);

    Route::resource(
        'personagem-itens',
        PersonagemItemController::class
    );

    Route::get('/relatorios', function () {
        return view('relatorios.index');
    })->name('relatorios.index');

    Route::get(
        '/relatorios/personagens',
        [RelatorioController::class, 'personagens']
    )->name('relatorios.personagens');

    Route::get(
        '/relatorios/npcs',
        [RelatorioController::class, 'npcs']
    )->name('relatorios.npcs');

    Route::get(
        '/relatorios/itens',
        [RelatorioController::class, 'itens']
    )->name('relatorios.itens');
});

require __DIR__.'/auth.php';