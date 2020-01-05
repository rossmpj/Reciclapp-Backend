<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificaciones';
    protected $primaryKey = 'calificacion_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comentario', 'usuario_id', 'objeto_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Objeto - Calificacion (1 - M)
    public function objetos()
    {
        return $this->belongsTo('App\Models\Objeto', 'objeto_id');
    }

    // Relación: Usuario - Calificacion (1 - M)
    public function usuarios()
    {
        return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }
}
