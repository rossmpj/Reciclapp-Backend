<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'categoria_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Categoria - Objeto (1 - M)
    public function objetos()
    {
        return $this->hasMany('App\Models\Objeto', 'categoria_id');
    }
}
