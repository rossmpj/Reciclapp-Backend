<?php

use Illuminate\Database\Seeder;
use App\Models\Objeto;

class ObjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objetos')->delete();
        
        Objeto::create([
            'nombre' => 'Papel reciclado',
            'descripcion' => 'Un quintal de papel periódico y bond de tamaño A4',
            'precio' => 2.75,
            'fecha_publicacion' => '2019-12-02',
            'estado' => 'disponible',
            'usuario_id' => 'kgdono@hotmail.com',
            'categoria_id' => 1
        ]);
        Objeto::create([
            'nombre' => 'Cartones reciclados',
            'descripcion' => 'Cartón grueso plegado por kg.',
            'precio' => 3.50,
            'fecha_publicacion' => '2019-07-14',
            'estado' => 'disponible',
            'usuario_id' => 'fundacionmespin@outlook.es',
            'categoria_id' => 2
        ]);
        Objeto::create([
            'nombre' => 'Plástico reciclado',
            'descripcion' => 'Botellas de plástico de detergentes varios colores',
            'precio' => 2.00,
            'fecha_publicacion' => '2019-05-25',
            'estado' => 'disponible',
            'usuario_id' => 'sbaguirr@espol.edu.ec',
            'categoria_id' => 3
        ]);
        Objeto::create([
            'nombre' => 'Vidrio reciclado',
            'descripcion' => 'Botellas de vidrio de cervezas, una caja con 12 unidades',
            'precio' => 5.00,
            'fecha_publicacion' => '2019-08-08',
            'estado' => 'disponible',
            'usuario_id' => 'pgvera@espol.edu.ec',
            'categoria_id' => 4
        ]);
        Objeto::create([
            'nombre' => 'Madera fina reciclada',
            'descripcion' => 'Madera cortada fina pintada de color café, 5 piezas',
            'precio' => 9.00,
            'fecha_publicacion' => '2018-11-15',
            'estado' => 'disponible',
            'usuario_id' => 'rmpincay@espol.edu.ec',
            'categoria_id' => 5
        ]);
        Objeto::create([
            'nombre' => 'Latas de aluminio',
            'descripcion' => 'Latas con acabado metálico en varios colores',
            'precio' => 4.00,
            'fecha_publicacion' => '2019-07-16',
            'estado' => 'no disponible',
            'usuario_id' => 'fundacionmespin@outlook.es',
            'categoria_id' => 6
        ]);
        Objeto::create([
            'nombre' => 'Piezas de bronce reciclado',
            'descripcion' => 'Piezas pequeñas de bronce cilindricas',
            'precio' => 6.00,
            'fecha_publicacion' => '2019-06-17',
            'estado' => 'no disponible',
            'usuario_id' => 'kgdono@hotmail.com',
            'categoria_id' => 7
        ]);
        Objeto::create([
            'nombre' => 'Papel periódico',
            'descripcion' => 'Papel periódico llano por pliegos',
            'precio' => 1.05,
            'fecha_publicacion' => '2019-08-02',
            'estado' => 'disponible',
            'usuario_id' => 'rmpincay@espol.edu.ec',
            'categoria_id' => 1
        ]);
        Objeto::create([
            'nombre' => 'Papel archivo',
            'descripcion' => 'Caja de papel reciclado',
            'precio' => 3.75,
            'fecha_publicacion' => '2019-01-30',
            'estado' => 'no disponible',
            'usuario_id' => 'pgvera@espol.edu.ec',
            'categoria_id' => 1
        ]);
        Objeto::create([
            'nombre' => 'Papel reciclado',
            'descripcion' => 'Papel tamaño oficio colores variados',
            'precio' => 2.75,
            'fecha_publicacion' => '2019-07-11',
            'estado' => 'disponible',
            'usuario_id' => 'sbaguirr@espol.edu.ec',
            'categoria_id' => 1
        ]);
    }
}
