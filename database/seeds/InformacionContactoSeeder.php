<?php

use Illuminate\Database\Seeder;
use App\Models\InformacionContacto;

class InformacionContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informacion_contactos')->delete();
        
        InformacionContacto::create([
            'nombres' => 'Rosa María',
            'apellidos' => 'Pincay Jiménez',
            'ciudad' => 'Guayaquil',
            'direccion' => 'Isla Trinitaria',
            'telefono' => '0968503660'
        ]);
        InformacionContacto::create([
            'nombres' => 'Stefanny Briggitte',
            'apellidos' => 'Aguirre Larrosa',
            'ciudad' => 'Guayaquil',
            'direccion' => 'Cdla. Juan Montalvo',
            'telefono' => '0986670863'
        ]);
        InformacionContacto::create([
            'nombres' => 'Pedro Gabriel',
            'apellidos' => 'Vera García',
            'ciudad' => 'Guayaquil',
            'direccion' => 'Los Ceibos',
            'telefono' => '0993878627'
        ]);
        InformacionContacto::create([
            'nombres' => 'Fernando Mario',
            'apellidos' => 'Espinoza Constante',
            'ciudad' => 'Guayaquil',
            'direccion' => 'Los Ceibos',
            'telefono' => '0999948830'
        ]);
        InformacionContacto::create([
            'nombres' => 'Kelly Gabriela',
            'apellidos' => 'Donoso Peñaherrera',
            'ciudad' => 'Quito',
            'direccion' => 'La rotonda',
            'telefono' => '0963112830'
        ]);
    }
}
