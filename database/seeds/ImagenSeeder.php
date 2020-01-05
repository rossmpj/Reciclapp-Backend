<?php

use Illuminate\Database\Seeder;
use App\Models\Imagen;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imagenes')->delete();
        
        Imagen::create([
            'ruta' => 'App\public\images\papel.jpg',
            'objeto_id' => 1
        ]);
        Imagen::create([
            'ruta' => 'App\public\images\carton.jpg',
            'objeto_id' => 2
        ]);
        Imagen::create([
            'ruta' => 'App\public\images\plastico.jpg',
            'objeto_id' => 3
        ]);
        Imagen::create([
            'ruta' => 'App\public\images\vidrio.jpg',
            'objeto_id' => 4
        ]);
        Imagen::create([
            'ruta' => 'App\public\images\madera.jpg',
            'objeto_id' => 5
        ]);
        Imagen::create([
            'ruta' => 'App\public\images\aluminio.jpg',
            'objeto_id' => 6
        ]);
        Imagen::create([
            'ruta' => 'App\public\images\bronce.jpeg',
            'objeto_id' => 7
        ]);
    }
}
