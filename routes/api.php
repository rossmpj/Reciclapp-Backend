<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*API Usuario */
    Route::get('mostrar_perfil/{usuario_id}', 'UsuarioController@mostrar_perfil');

/*API Calificacion */
    Route::get('mostrar_comentarios/{id_objeto}', 'CalificacionController@mostrar_comentarios');
    Route::post('comentarios', 'CalificacionController@comentar_objeto');

/*API Objeto */
    Route::post('objetos', 'ObjetoController@registrar_objeto');