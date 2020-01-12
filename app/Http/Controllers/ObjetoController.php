<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;

class ObjetoController extends Controller
{
    public function registrar_objeto(Request $request)
    {
        $objeto= new Objeto();
        $objeto->nombre= $request->get('nombre');
        $objeto->descripcion= $request->get('descripcion');
        $objeto->precio= $request->get('precio');
        $objeto->fecha_publicacion= $request->get('fecha_publicacion');
        $objeto->estado= $request->get('estado');
        $objeto->usuario_id= $request->get('usuario_id');
        $objeto->categoria_id= $request->get('categoria_id');
        $objeto->save();   
    }


    
}
