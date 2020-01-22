<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetos', function (Blueprint $table) {
            $table->bigIncrements('objeto_id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->double('precio');
            $table->string('estado');
            $table->timestamps();

            $table->string('usuario_id');
            $table->bigInteger('categoria_id')->unsigned();
            
            $table->foreign('usuario_id')
            ->references('usuario_id')->on('usuarios')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->foreign('categoria_id')
            ->references('categoria_id')->on('categorias')
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
        Schema::dropIfExists('objetos');
    }
}
