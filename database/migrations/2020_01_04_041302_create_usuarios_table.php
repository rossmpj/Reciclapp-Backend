<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('usuario_id');
            $table->string('nombre_usuario');
            $table->string('contrasena');
            $table->timestamps();
            
            $table->primary('usuario_id');
            $table->bigInteger('rol_id')->unsigned();
            $table->bigInteger('informacion_id')->unsigned();
            
            $table->foreign('rol_id')
            ->references('rol_id')->on('roles')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('informacion_id')
            ->references('informacion_id')->on('informacion_contactos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
