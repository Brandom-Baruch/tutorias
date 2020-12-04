<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('habito_id')->unsigned();
            $table->foreign('habito_id')->references('id')->on('test_habito_estudio');
            $table->char('respuesta1');
            $table->char('respuesta2');
            $table->char('respuesta3');
            $table->char('respuesta4');
            $table->char('respuesta5');            
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
        Schema::dropIfExists('planificacion');
    }
}
