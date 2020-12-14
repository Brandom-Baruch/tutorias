<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBDomicilioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_b__domicilio', function (Blueprint $table) {
            $table->increments('id');
            //FK Alumnos
            $table->integer('alumno_id')->unsigned()->nullable();
            $table->foreign('alumno_id')->references('nia')->on('alumnos');
            //FK Docentes
            $table->integer('docente_id')->unsigned()->nullable();
            $table->foreign('docente_id')->references('id')->on('docentes');
            //FK Padres de familia
            $table->integer('padre_id')->unsigned()->nullable();
            $table->foreign('padre_id')->references('id')->on('padre_familias');
            //FK Domilicio
            $table->integer('domicilio_id')->unsigned();
            $table->foreign('domicilio_id')->references('id')->on('domicilios');

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
        Schema::dropIfExists('_b__domicilio');
    }
}
