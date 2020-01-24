<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function mostrar_perfil($usuario_id){
        return Usuario::select('usuarios.usuario_id','usuarios.nombre_usuario','informacion_contactos.nombres',
        'informacion_contactos.apellidos','informacion_contactos.ciudad','informacion_contactos.direccion',
        'informacion_contactos.telefono')
        ->join('informacion_contactos','informacion_contactos.informacion_id','=','usuarios.informacion_id')
        ->where('usuarios.usuario_id',$usuario_id)
        ->get();
    }

    public function usuarios(){
        return Usuario::all();
    }
}
