<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentezcosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parentezcos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parentezco');
            //FK
            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('nia')->on('alumnos');

            //FK
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
        Schema::dropIfExists('parentezcos');
    }
}
