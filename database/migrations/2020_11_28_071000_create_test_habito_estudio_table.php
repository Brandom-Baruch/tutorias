<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestHabitoEstudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_habito_estudio', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_aplicacion')->nullable();
            $table->string('descripcion');
            //FK
            $table->integer('test_id')->unsigned();
            $table->foreign('test_id')->references('id')->on('test');
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
        Schema::dropIfExists('tipos_habito_estudio');
    }
}
