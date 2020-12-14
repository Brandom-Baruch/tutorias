<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtribucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atribuciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cuestionario_id')->unsigned();
            $table->foreign('cuestionario_id')->references('id')->on('cuestionario_anexos');
            $table->string('respuesta1');
            $table->string('respuesta2');
            $table->string('respuesta3');
            $table->string('respuesta4');
            $table->string('respuesta5');
            $table->string('respuesta6');
            $table->string('respuesta7'); 
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
        Schema::dropIfExists('atribuciones');
    }
}
