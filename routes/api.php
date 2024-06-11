<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;


Route::post('/pizza', [PizzaController::class, 'Crear']);

