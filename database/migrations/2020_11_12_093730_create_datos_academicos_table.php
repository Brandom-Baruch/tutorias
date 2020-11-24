<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_academicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entrevista_id')->unsigned();
            $table->foreign('entrevista_id')->references('id')->on('entrevista_fresca_alumnos');
            $table->string('respuesta1');
            $table->string('respuesta2');
            $table->string('r2');
            $table->string('respuesta3');
            $table->string('respuesta4');
            $table->string('r4')->nullable();
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
        Schema::dropIfExists('datos_academicos');
    }
}
