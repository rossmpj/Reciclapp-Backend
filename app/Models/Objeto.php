<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    protected $table = 'objetos';
    protected $primaryKey = 'objeto_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'estado','created_at','usuario_id', 'categoria_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'updated_at'
    ];
  
    // Relación: Categoria - Objeto (1 - M)
    public function categorias()
    {
        return $this->belongsTo('App\Models\Categoria', 'categoria_id');
    }
        
    // Relación: Objeto - Imagen (1 - M)
    public function imagenes()
    {
        return $this->hasMany('App\Models\Imagen', 'objeto_id');
    }
    
    // Relación: Usuario - Objeto (1 - M)
    public function usuarios()
    {
        return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }

    // Relación: Objeto - Calificacion (1 - M)
    public function calificaciones()
    {
        return $this->hasMany('App\Models\Calificacion', 'objeto_id');
    }
}
