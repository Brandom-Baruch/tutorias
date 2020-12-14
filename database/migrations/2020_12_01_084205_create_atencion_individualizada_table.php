<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtencionIndividualizadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencion_individualizada', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_docente');
            $table->string('grupo');
            $table->string('descripcion');
            $table->date('fecha_aplicacion');
            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('nia')->on('alumnos');
            $table->string('respuesta1')->nullable();
            $table->string('respuesta2')->nullable();
            $table->string('respuesta3')->nullable();
            $table->string('respuesta4')->nullable();
            $table->string('respuesta5')->nullable();
            $table->string('respuesta6')->nullable();
            $table->string('respuesta7')->nullable();
            $table->string('respuesta8')->nullable();
            $table->string('respuesta9')->nullable();
            $table->string('respuesta10')->nullable();
            $table->string('respuesta11')->nullable();
            $table->string('respuesta12')->nullable();
            $table->string('respuesta13')->nullable();
            $table->string('respuesta14')->nullable();
            $table->string('respuesta15')->nullable();
            $table->string('respuesta16')->nullable();
            $table->string('respuesta17')->nullable();
            $table->string('respuesta18')->nullable();
            $table->string('respuesta19')->nullable();
            $table->string('respuesta20')->nullable();
            $table->string('respuesta21')->nullable();
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
        Schema::dropIfExists('atencion_individualizada');
    }
}
