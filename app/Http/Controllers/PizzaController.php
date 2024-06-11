<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function Crear(Request $request){
        $pizza = new Pizza();
        $pizza -> nombre = $request->post("nombre");
        $pizza -> precio = $request->post("precio");
        $pizza -> save();
        return $pizza; // Por estandar REST, retornamos el modelo creado

    }
}
