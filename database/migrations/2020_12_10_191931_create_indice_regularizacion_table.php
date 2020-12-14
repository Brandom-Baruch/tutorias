<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndiceRegularizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indice_regularizacion', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('semanaA');
            $table->tinyInteger('semanaB');
            $table->tinyInteger('semanaC');
            $table->tinyInteger('semanaD');
            $table->tinyInteger('semanaE'); 
            $table->integer('reporte_id')->unsigned()->nullable();
            $table->foreign('reporte_id')->references('id')->on('reporte_tutoria_grupal');
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
        Schema::dropIfExists('indice_regularizacion');
    }
}
