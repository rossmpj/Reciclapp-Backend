<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->bigIncrements('calificacion_id');
            $table->string('comentario');
            $table->timestamps();

            $table->string('usuario_id');
            $table->bigInteger('objeto_id')->unsigned();

            $table->foreign('usuario_id')
            ->references('usuario_id')->on('usuarios')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->foreign('objeto_id')
            ->references('objeto_id')->on('objetos')
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
        Schema::dropIfExists('calificaciones');
    }
}
