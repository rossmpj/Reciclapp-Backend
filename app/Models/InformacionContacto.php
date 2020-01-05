<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformacionContacto extends Model
{
    protected $table = 'informacion_contactos';
    protected $primaryKey = 'informacion_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres', 'apellidos', 'ciudad', 'direccion', 'telefono'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: InformacionContacto - Usuario (1 - 1)
    public function usuarios()
    {
        return $this->hasOne('App\Models\Usuario', 'informacion_id');
    }
}
