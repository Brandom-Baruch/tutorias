<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosAdicionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_adicionales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entrevista_id')->unsigned();
            $table->foreign('entrevista_id')->references('id')->on('entrevista_fresca_alumnos');
            $table->string('respuesta1');
            $table->string('r1')->nullable();
            $table->string('respuesta2');
            $table->string('r2')->nullable();
            $table->string('respuesta3');
            $table->string('r3')->nullable();
            $table->string('r3_2')->nullable();
            $table->string('respuesta4');
            $table->string('r4')->nullable();
            $table->string('respuesta5');
            $table->string('r5')->nullable();
            $table->string('respuesta6');
            $table->string('respuesta7');
            $table->string('respuesta8');
            $table->string('respuesta9');
            $table->string('respuesta10');
            $table->string('respuesta11');
            $table->string('respuesta12');
            $table->string('respuesta13');
            $table->string('respuesta14');
            $table->string('r14')->nullable();
            $table->string('respuesta15');
            $table->string('r15')->nullable();
            $table->string('respuesta16')->nullable();
            $table->string('r16')->nullable();
            $table->string('respuesta17');
            $table->string('r17')->nullable();
            $table->string('r17_2')->nullable();
            $table->string('respuesta18');
            $table->string('respuesta19');            
            $table->string('r20_1');
            $table->string('r20_2');
            $table->string('r20_3');
            $table->string('r20_4');
            $table->string('r20_5');
            $table->string('r20_6');
            $table->string('r20_7');
            $table->string('r20_8');
            $table->string('r20_9');
            $table->string('r20_10');
            $table->string('r20_11');
            $table->string('r20_12');
            $table->string('r20_13');
            $table->string('r20_14');
            $table->string('r20_15');
            $table->string('r20_16');
            $table->string('r20_17');
            $table->string('r20_18');            
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
        Schema::dropIfExists('datos_adicionales');
    }
}
