<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';
    protected $primaryKey = 'imagen_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ruta', 'objeto_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Objeto - Imagen (1 - M)
    public function objetos()
    {
        return $this->belongsTo('App\Models\Objeto', 'objeto_id');
    }
}
