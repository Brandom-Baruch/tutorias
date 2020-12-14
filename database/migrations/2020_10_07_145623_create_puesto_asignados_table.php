<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuestoAsignadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puesto_asignados', function (Blueprint $table) {
            $table->increments('id');
            //FK
            $table->integer('docente_id')->unsigned();
            $table->foreign('docente_id')->references('id')->on('docentes');
            //FK
            $table->integer('puesto_id')->unsigned();
            $table->foreign('puesto_id')->references('id')->on('puestos');

            //FK
         /*   $table->integer('puesto_asignado_id')->unsigned();
            $table->foreign('puesto_asignado_id')->references('id')->on('puesto_asignados');*/

            
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
        Schema::dropIfExists('puesto_asignados');
    }
}
