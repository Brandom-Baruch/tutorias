<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcaSiNoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_si_no', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entrevista_id')->unsigned();
            $table->foreign('entrevista_id')->references('id')->on('entrevista_fresca_padres');
            //Marca Si No
            $table->string('respuesta1');
            $table->string('respuesta2');
            $table->string('respuesta3');
            $table->string('respuesta4');
            $table->string('respuesta5');
            $table->string('respuesta6');
            $table->string('respuesta7');
            $table->string('respuesta8');
            $table->string('respuesta9');
            $table->string('respuesta10');
            $table->string('respuesta11');
            $table->string('respuesta12');
            $table->string('respuesta13');
            $table->string('respuesta14');
            $table->string('respuesta15');
            $table->string('respuesta16');
            $table->string('respuesta17');
            $table->string('respuesta18');
            //Describa brevemente como es su hijo 
            $table->string('respuesta19');
            //¿Con que persona considera usted que su hijo tiene más confianza? 
            $table->string('respuesta20');
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
        Schema::dropIfExists('marca_si_no');
    }
}
