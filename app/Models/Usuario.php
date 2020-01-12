<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
     /**
     * Indicates if the IDs are no auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_usuario', 'contrasena', 'usuario_id', 'rol_id', 'informacion_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];
    
    // Relación: Usuario - Objeto (1 - M)
    public function objetos()
    {
        return $this->hasMany('App\Models\Objeto', 'usuario_id');
    }

    // Relación: Rol - Usuario (1 - M)
    public function usuarios()
    {
        return $this->belongsTo('App\Models\Rol', 'rol_id');
    }

    // Relación: InformacionContacto - Usuario (1 - 1)
    public function informacion_contactos()
    {
        return $this->belongsTo('App\Models\InformacionContacto', 'informacion_id');
    }

    // Relación: Usuario - Calificacion (1 - M)
    public function calificaciones()
    {
        return $this->hasMany('App\Models\Calificacion', 'calificacion_id');
    }
}
