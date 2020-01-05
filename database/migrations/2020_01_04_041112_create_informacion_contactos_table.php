<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_contactos', function (Blueprint $table) {
            $table->bigIncrements('informacion_id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informacion_contactos');
    }
}
