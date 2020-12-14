<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstrategiasAprendizajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estrategias_aprendizaje', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('habito_id')->unsigned();
            $table->foreign('habito_id')->references('id')->on('test_habito_estudio');
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
            $table->char('respuesta14');
            $table->char('respuesta15');
            $table->char('respuesta16');
            $table->char('respuesta17');
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
        Schema::dropIfExists('estrategias_aprendizaje');
    }
}
