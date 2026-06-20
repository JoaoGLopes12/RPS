<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\RacaApiController;
use App\Http\Controllers\Api\ClasseApiController;
use App\Http\Controllers\Api\ItemApiController;
use App\Http\Controllers\Api\NpcApiController;
use App\Http\Controllers\Api\PersonagemApiController;

Route::get('/racas', [
    RacaApiController::class,
    'index'
]);

Route::get('/racas/{id}', [
    RacaApiController::class,
    'show'
]);

Route::get('/classes', [
    ClasseApiController::class,
    'index'
]);

Route::get('/classes/{id}', [
    ClasseApiController::class,
    'show'
]);

Route::get('/itens', [
    ItemApiController::class,
    'index'
]);

Route::get('/itens/{id}', [
    ItemApiController::class,
    'show'
]);


Route::get('/npcs', [
    NpcApiController::class,
    'index'
]);

Route::get('/npcs/{id}', [
    NpcApiController::class,
    'show'
]);

Route::get('/personagens', [
    PersonagemApiController::class,
    'index'
]);

Route::get('/personagens/{id}', [
    PersonagemApiController::class,
    'show'
]);