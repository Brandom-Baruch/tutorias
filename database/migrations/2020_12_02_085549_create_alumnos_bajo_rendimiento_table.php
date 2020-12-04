<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosBajoRendimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_bajo_rendimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('materia_name');
            $table->string('docente_name');            
            $table->integer('tutor_id')->unsigned()->nullable();
            $table->foreign('tutor_id')->references('id')->on('docentes');
            $table->tinyInteger('total_alumnos');
            $table->string('grupo');
            $table->tinyInteger('porcentaje');
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
        Schema::dropIfExists('alumnos_bajo_rendimiento');
    }
}
