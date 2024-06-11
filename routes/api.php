<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;


Route::post('/pizza', [PizzaController::class, 'Crear']);
Route::get('/pizza', [PizzaController::class, 'ListarTodas']);
Route::get('/pizza/{d}', [PizzaController::class, 'ListarUna']);


