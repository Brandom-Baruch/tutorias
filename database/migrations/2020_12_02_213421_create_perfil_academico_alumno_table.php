<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilAcademicoAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_academico_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('nia')->on('alumnos');
            $table->string('escuela_procedencia');
            $table->string('ubicacion_escuela');
            $table->string('respuesta1');
            $table->string('respuesta2');
            $table->string('respuesta3');
            $table->string('respuesta4');
            $table->string('respuesta5');
            $table->string('respuesta6');
            $table->string('respuesta7');
            $table->string('respuesta8');
            $table->string('respuesta9');
            $table->string('respuesta10');
            $table->string('respuesta11');
            $table->string('respuesta12');
            $table->string('respuesta13');
            $table->string('respuesta14');
            $table->string('respuesta15');            
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
        Schema::dropIfExists('perfil_academico_alumno');
    }
}
