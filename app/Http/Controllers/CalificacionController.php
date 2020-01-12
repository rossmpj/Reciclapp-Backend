<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calificacion;

class CalificacionController extends Controller
{
    public function comentar_objeto(Request $request)
    {
        $calificacion= new Calificacion();
        $calificacion->comentario= $request->get('comentario');
        $calificacion->usuario_id= $request->get('usuario_id');
        $calificacion->objeto_id= $request->get('objeto_id');
        $calificacion->save();   
    }

    public function mostrar_comentarios($id_publicacion){
        return Calificacion::select('usuarios.nombre_usuario','calificaciones.comentario','calificaciones.created_at')
        ->join('usuarios','usuarios.usuario_id','=','calificaciones.usuario_id')
        ->join('objetos','objetos.objeto_id','=','calificaciones.objeto_id')
        ->where('objetos.objeto_id',$id_publicacion)
        ->get();
    }
}
