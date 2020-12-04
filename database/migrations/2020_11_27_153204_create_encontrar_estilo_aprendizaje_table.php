<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncontrarEstiloAprendizajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encontrar_estilo_aprendizaje', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('test_id')->unsigned();
            $table->foreign('test_id')->references('id')->on('test');

            $table->char('respuesta1');
            $table->char('respuesta2');
            $table->char('respuesta3');
            $table->char('respuesta4');
            $table->char('respuesta5');
            $table->char('respuesta6');
            $table->char('respuesta7');
            $table->char('respuesta8');
            $table->char('respuesta9');
            $table->char('respuesta10');
            $table->char('respuesta11');
            $table->char('respuesta12');
            $table->char('respuesta13');
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
        Schema::dropIfExists('encontrar_estilo_aprendizaje');
    }
}
