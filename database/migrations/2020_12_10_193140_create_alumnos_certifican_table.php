<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosCertificanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_certifican', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('hombres');
            $table->tinyInteger('mujeres');
            $table->integer('reporte_id')->unsigned()->nullable();
            $table->foreign('reporte_id')->references('id')->on('reporte_tutoria_grupal');
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
        Schema::dropIfExists('alumnos_certifican');
    }
}
