<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

// Según el estandar REST, la URI de la ruta SIEMPRE
// representa el recurso que se va a manipular (en este caso /pizza).
// La accion se representa con el metodo HTTP:
// GET -> Leer
// POST -> Crear
// PUT -> Modificar
// DELETE -> Eliminar
// 
// Ejemplo de lo que NO HAY QUE HACER:
// /crearPizza
// /modificarPizza
// /eliminarPizza
// /listarPizzas


Route::get('/pizza', [PizzaController::class, 'ListarTodas']);
Route::get('/pizza/{d}', [PizzaController::class, 'ListarUna']);
Route::post('/pizza', [PizzaController::class, 'Crear']);
Route::delete('/pizza/{d}', [PizzaController::class, 'Eliminar']);
Route::put('/pizza/{d}', [PizzaController::class, 'Modificar']);


