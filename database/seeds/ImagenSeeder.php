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
            'ruta' => 'https://i.gyazo.com/0c290535ad676a5ad5cc151b0b6f1871.png',
            'objeto_id' => 1
        ]);
        Imagen::create([
            'ruta' => 'https://i.gyazo.com/fc1f149de3e1b5f7b970919711a7cf5c.png',
            'objeto_id' => 2
        ]);
        Imagen::create([
            'ruta' => 'https://i.gyazo.com/1d2b05716e62c021b68a0f1466beb95a.jpg',
            'objeto_id' => 3
        ]);
        Imagen::create([
            'ruta' => 'https://i.gyazo.com/82528563d24646fee6660c0f45a627b1.png',
            'objeto_id' => 4
        ]);
        Imagen::create([
            'ruta' => 'https://i.gyazo.com/792a0bd97846eb35fca737edc7348707.png',
            'objeto_id' => 5
        ]);
        Imagen::create([
            'ruta' => 'https://i.gyazo.com/b7738557392b62abbd78221b75371f9a.png',
            'objeto_id' => 6
        ]);
        Imagen::create([
            'ruta' => 'https://i.gyazo.com/8ace2dbbf91208b5234fa99ae0b1ae71.png',
            'objeto_id' => 7
        ]);
        Imagen::create([
            'ruta' => 'https://i.gyazo.com/0c290535ad676a5ad5cc151b0b6f1871.png',
            'objeto_id' => 8
        ]);
        Imagen::create([
            'ruta' => 'https://i.gyazo.com/8ace2dbbf91208b5234fa99ae0b1ae71.png',
            'objeto_id' => 9
        ]);
    }
}
