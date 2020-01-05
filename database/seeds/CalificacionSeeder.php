<?php

use Illuminate\Database\Seeder;
use App\Models\Calificacion;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calificaciones')->delete();
        
        Calificacion::create([
            'comentario' => 'Objetos rotos',
            'usuario_id' => 'sbaguirr@espol.edu.ec',
            'objeto_id' => 1
        ]);

        Calificacion::create([
            'comentario' => 'Buen servicio',
            'usuario_id' => 'pgvera@espol.edu.ec',
            'objeto_id' => 2
        ]);

        Calificacion::create([
            'comentario' => 'Entrega inmediata',
            'usuario_id' => 'rmpincay@espol.edu.ec',
            'objeto_id' => 3
        ]);

        Calificacion::create([
            'comentario' => 'Buen producto',
            'usuario_id' => 'sbaguirr@espol.edu.ec',
            'objeto_id' => 4
        ]);

        Calificacion::create([
            'comentario' => 'Venta de mala calidad',
            'usuario_id' => 'pgvera@espol.edu.ec',
            'objeto_id' => 5
        ]);

        Calificacion::create([
            'comentario' => 'Venta de mala calidad',
            'usuario_id' => 'kgdono@hotmail.com',
            'objeto_id' => 6
        ]);

        Calificacion::create([
            'comentario' => 'Venta de excelente calidad',
            'usuario_id' => 'kgdono@hotmail.com',
            'objeto_id' => 7
        ]);
    }
}
