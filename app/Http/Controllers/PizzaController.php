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

    public function ListarTodas(Request $request){
        return Pizza::all();
    }

    public function ListarUna(Request $request, $id){
        return Pizza::findOrFail($id);
    }

    public function Eliminar(Request $request, $id){
        $pizza = Pizza::findOrFail($id);
        $pizza -> delete();
        return [ 'mensaje' => 'Pizza eliminada' ];
    }

    public function Modificar(Request $request, $id){
        $pizza = Pizza::findOrFail($id);

        // Por mas que el metodo sea PUT, 
        // Laravel no diferencia entre PUT y POST 
        // para acceder a los parametros recibidos,
        // siempre se usa $request -> post("nombre_del_parametro"). 

        $pizza -> nombre = $request -> post("nombre"); 
        $pizza -> precio = $request -> post("precio");
        $pizza -> save();

        return $pizza; // Por estandar REST, retornamos el modelo modificado
    }
}
