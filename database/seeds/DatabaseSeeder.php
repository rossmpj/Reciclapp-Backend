<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaSeeder::class);
        $this->call(InformacionContactoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(ObjetoSeeder::class);
        $this->call(ImagenSeeder::class);
        $this->call(CalificacionSeeder::class);
    }
}
