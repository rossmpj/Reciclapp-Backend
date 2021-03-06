<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Imagen;
use App\Models\Objeto;

class ObjetoController extends Controller
{
    public function registrar_objeto(Request $request)
    {
        DB::beginTransaction();
        try{
        $objeto= new Objeto();
        $objeto->nombre= $request->get('nombre');
        $objeto->descripcion= $request->get('descripcion');
        $objeto->precio= $request->get('precio');
        $objeto->estado= $request->get('estado');
        $objeto->usuario_id= $request->get('usuario_id');
        $objeto->categoria_id= $request->get('categoria_id');
        $objeto->save();   

        
        $imagen= new Imagen();
        $imagen->ruta= $request->get('ruta');
        $imagen->objeto_id= $objeto->objeto_id;
        $imagen->save();

        DB::commit();
                return response()->json(['log'=>'exito'],200);
        }catch(Exception $e){
            DB::rollback();
            return response()->json(['log'=>$e],400);
        } 
    }

    public function ver_mis_publicaciones($usuario_id)
    {
        return Objeto::select(
            'objetos.objeto_id','objetos.nombre as titulo', 'objetos.descripcion', 'objetos.precio', 
        'objetos.created_at', 'categorias.tipo as categoria', 'objetos.estado', 'imagenes.ruta', 'usuarios.nombre_usuario')
        ->join('usuarios','usuarios.usuario_id','=','objetos.usuario_id')
        ->join('imagenes','imagenes.objeto_id','=','objetos.objeto_id') 
        ->join('categorias','categorias.categoria_id','=','objetos.categoria_id')
        ->where('objetos.usuario_id', $usuario_id)
        ->get();
    }

    public function ver_publicaciones_otros($usuario_id)
    {
        return Objeto::select(
            'objetos.objeto_id','objetos.nombre as titulo', 'objetos.descripcion', 'objetos.precio', 
        'objetos.created_at', 'categorias.tipo as categoria', 'imagenes.ruta','usuarios.nombre_usuario')
        ->join('usuarios','usuarios.usuario_id','=','objetos.usuario_id')
        ->join('imagenes','imagenes.objeto_id','=','objetos.objeto_id')
        ->join('categorias','categorias.categoria_id','=','objetos.categoria_id')
        ->where('objetos.usuario_id', "!=", $usuario_id)
        ->get();
    }

    public function mostrar_objetos_por_categoria($categoria)
    {
        return Objeto::select('objetos.objeto_id','objetos.nombre as titulo', 'objetos.descripcion', 'objetos.precio', 
        'objetos.created_at','categorias.tipo as categoria', 'imagenes.ruta','usuarios.nombre_usuario')
        ->join('usuarios','usuarios.usuario_id','=','objetos.usuario_id')
        ->join('imagenes','imagenes.objeto_id','=','objetos.objeto_id')
        ->join('categorias','categorias.categoria_id','=','objetos.categoria_id')
        ->where('categorias.tipo', $categoria)
        ->get();
    }

    public function mostrar_objetos()
    {
        return Objeto::select('nombre', 'descripcion', 'precio', 
        'objetos.created_at', 'imagenes.ruta')
        ->join('imagenes','imagenes.objeto_id','=','objetos.objeto_id')
        ->join('categorias','categorias.categoria_id','=','objetos.categoria_id')
        ->where('estado', 'disponible')
        ->get();
    }

    public function cambiar_estado(Request $request, $objeto_id)
    {
        return \DB::table('objetos')
               ->where('objeto_id', $objeto_id)
               ->update(['estado' => $request->get('estado')]);
    }
    
}
