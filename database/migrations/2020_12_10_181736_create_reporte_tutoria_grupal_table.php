<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteTutoriaGrupalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_tutoria_grupal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tutor_id')->unsigned()->nullable();
            $table->foreign('tutor_id')->references('id')->on('docentes');
            $table->tinyInteger('bajas');
            $table->tinyInteger('altas');
            $table->tinyInteger('porcentaje_eficiencia');
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
        Schema::dropIfExists('reporte_tutoria_grupal');
    }
}
