<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrevistaFrescaPadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevista_fresca_padres', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_aplicacion')->nullable();
            $table->string('descripcion'); //Inicio, Finalizo            
            $table->integer('alumno_id');//Para saber que familiar hace el test
            $table->integer('padre_id')->unsigned();
            $table->foreign('padre_id')->references('id')->on('padre_familias');
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
        Schema::dropIfExists('entrevista_fresca_padres');
    }
}
