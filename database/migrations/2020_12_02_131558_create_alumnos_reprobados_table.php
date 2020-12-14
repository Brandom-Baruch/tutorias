<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosReprobadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_reprobados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reporte_id');
            $table->foreign('reporte_id')->references('id')->on('alumnos_bajo_rendimiento');            
            $table->string('alumno_name');
            $table->string('motivo');
            $table->string('estrategia_especifica');
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
        Schema::dropIfExists('alumnos_reprobados');
    }
}
