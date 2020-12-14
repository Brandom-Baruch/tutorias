<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientoAlumnosRiesgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_alumnos_riesgo', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tutor_id')->unsigned()->nullable();
            $table->foreign('tutor_id')->references('id')->on('docentes');

            $table->integer('alumno_id')->unsigned()->nullable();
            $table->foreign('alumno_id')->references('nia')->on('alumnos');

            $table->date('fecha'); 
            
            $table->string('promedio_acumulado');
            $table->string('promedio_acumulado_ciclo_actual');
            $table->string('beneficiario_beca_apoyo')->nullable();
            $table->string('estado_salud_alumno');
            $table->string('contexto_familiar_alumno');

            $table->string('docente1');
            $table->string('materia1');
            $table->string('comentarios1');

            $table->string('docente2');
            $table->string('materia2');
            $table->string('comentarios2');

            $table->string('docente3');
            $table->string('materia3');
            $table->string('comentarios3');

            $table->string('docente4')->nullable();
            $table->string('materia4')->nullable();
            $table->string('comentarios4')->nullable();

            $table->string('docente5')->nullable();
            $table->string('materia5')->nullable();
            $table->string('comentarios5')->nullable();

            $table->string('docente6')->nullable();
            $table->string('materia6')->nullable();
            $table->string('comentarios6')->nullable();

            $table->string('docente7')->nullable();
            $table->string('materia7')->nullable();
            $table->string('comentarios7')->nullable();

            $table->string('desempeño_escolar');
            $table->string('compromisos_acuerdos');
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
        Schema::dropIfExists('seguimiento_alumnos_riesgo');
    }
}
