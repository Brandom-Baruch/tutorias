<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_familiares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entrevista_id')->unsigned();
            $table->foreign('entrevista_id')->references('id')->on('entrevista_fresca_alumnos');
            $table->string('respuesta1')->nullable();
            $table->string('r1')->nullable();
            $table->string('respuesta2');
            $table->string('respuesta3')->nullable();
            $table->string('r3')->nullable();
            $table->string('respuesta4');
            $table->string('respuesta5')->nullable();
            $table->string('r5')->nullable();
            $table->string('respuesta6');
            $table->string('respuesta7'); 
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
        Schema::dropIfExists('datos_familiares');
    }
}
