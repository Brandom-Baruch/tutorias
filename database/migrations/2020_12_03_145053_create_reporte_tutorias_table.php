<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteTutoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_tutorias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tutor_id')->unsigned()->nullable();
            $table->foreign('tutor_id')->references('id')->on('docentes');
            ///GRUPO->MATERIA->DOCENTE
            $table->string('ciclo_escolar');
            $table->date('fecha');
            $table->string('director_name');
            $table->string('tutor_escolar_name');
            $table->string('orientador_name');
            $table->tinyInteger('total_hombres');
            $table->tinyInteger('total_mujeres');
            $table->tinyInteger('bajas_registradas');
            $table->tinyInteger('altas_registradas');
            $table->string('principales_motivos_baja');
            $table->tinyInteger('alumnos_mas_de_tres_materia_reprobada');
            $table->tinyInteger('alumnos_necesitan_seguimiento');
            $table->tinyInteger('alumnos_requieren_orientacion');
            $table->tinyInteger('alumnos_requieren_atencion_especial');
            $table->tinyInteger('alumnos_canalizados_alguna_institucion');
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
        Schema::dropIfExists('reporte_tutorias');
    }
}
