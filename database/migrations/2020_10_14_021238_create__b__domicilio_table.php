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
            $table->integer('nia_id')->unsigned();
            $table->foreign('nia_id')->references('id')->on('alumnos');
            //FK Docentes
            $table->integer('docente_id')->unsigned();
            $table->foreign('docente_id')->references('id')->on('alumnos');
            //FK Padres de familia
            $table->integer('padre_id')->unsigned();
            $table->foreign('padre_id')->references('id')->on('alumnos');
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
