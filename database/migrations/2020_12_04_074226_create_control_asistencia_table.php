<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlAsistenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_asistencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tutor_id')->unsigned()->nullable();
            $table->foreign('tutor_id')->references('id')->on('docentes');
            $table->integer('alumno_nia')->unsigned()->nullable();
            $table->foreign('alumno_nia')->references('nia')->on('alumnos');
            //$table->integer('grupo');
            $table->date('fecha');
            $table->char('atencion_oportuna');
            $table->char('atencion_seguimiento');
            $table->string('caso_situacion_atendida');
            $table->string('solucion');
            $table->string('indicaciones_posteriores');
            //GRUPO
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
        Schema::dropIfExists('control_asistencia');
    }
}
