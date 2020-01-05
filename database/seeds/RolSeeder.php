<?php

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        
        Rol::create([
            'tipo' => 'Comprador'
        ]);
        Rol::create([
            'tipo' => 'Vendedor'
        ]);
        Rol::create([
            'tipo' => 'Fundacion'
        ]);
    }
}
