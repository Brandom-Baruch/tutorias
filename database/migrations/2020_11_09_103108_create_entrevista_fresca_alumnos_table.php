<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrevistaFrescaAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevista_fresca_alumnos', function (Blueprint $table) {
            $table->increments('id');            
            $table->date('fecha_aplicacion')->nullable();
            $table->string('descripcion'); //Inicio, Finalizo
            //FK
            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('nia')->on('alumnos');
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
        Schema::dropIfExists('entrevista_fresca_alumnos');
    }
}
