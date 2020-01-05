<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->delete();
        
        Categoria::create([
            'tipo' => 'papel'
        ]);
        Categoria::create([
            'tipo' => 'carton'
        ]);
        Categoria::create([
            'tipo' => 'plástico'
        ]);
        Categoria::create([
            'tipo' => 'vidrio'
        ]);
        Categoria::create([
            'tipo' => 'madera'
        ]);
        Categoria::create([
            'tipo' => 'aluminio'
        ]);
        Categoria::create([
            'tipo' => 'bronce'
        ]);
    }
}
