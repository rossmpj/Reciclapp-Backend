<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->delete();

        Usuario::create([
            'usuario_id' => 'rmpincay@espol.edu.ec',
            'nombre_usuario' => 'rossmpj',
            'contrasena' => bcrypt('rm1234'),
            'rol_id' => 1,
            'informacion_id' => 1
        ]);
        Usuario::create([
            'usuario_id' => 'sbaguirr@espol.edu.ec',
            'nombre_usuario' => 'sbaguirre',
            'contrasena' => bcrypt('sb1234'),
            'rol_id' => 2,
            'informacion_id' => 2
        ]);
        Usuario::create([
            'usuario_id' => 'pgvera@espol.edu.ec',
            'nombre_usuario' => 'pedrogv',
            'contrasena' => bcrypt('pg1234'),
            'rol_id' => 3,
            'informacion_id' => 1
        ]);        
        Usuario::create([
            'usuario_id' => 'fundacionmespin@outlook.es',
            'nombre_usuario' => 'fmespinonza',
            'contrasena' => bcrypt('fm1234'),
            'rol_id' => 3,
            'informacion_id' => 4
        ]);
        Usuario::create([
            'usuario_id' => 'kgdono@hotmail.com',
            'nombre_usuario' => 'kgdonp',
            'contrasena' => bcrypt('kg1234'),
            'rol_id' => 2,
            'informacion_id' => 5
        ]);
    }
}
