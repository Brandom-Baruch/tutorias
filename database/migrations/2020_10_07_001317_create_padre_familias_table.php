<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadreFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padre_familias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('edad');
            $table->string('curp')->unique();
            $table->string('telefono_fijo');
            $table->string('telefono_cel');
            $table->string('profesion');
            $table->string('ocupacion');
            $table->string('escolaridad');
            $table->string('estado_civil');
            $table->rememberToken();
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
        Schema::dropIfExists('padre_familias');
    }
}
