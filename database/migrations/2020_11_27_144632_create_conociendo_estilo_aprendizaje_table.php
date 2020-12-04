<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConociendoEstiloAprendizajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conociendo_estilo_aprendizaje', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('test_id')->unsigned();
            $table->foreign('test_id')->references('id')->on('test');

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
            $table->char('respuesta18');
            $table->char('respuesta19');
            $table->char('respuesta20');
            $table->char('respuesta21');
            $table->char('respuesta22');
            $table->char('respuesta23');
            $table->char('respuesta24');
            $table->char('respuesta25');
            $table->char('respuesta26');
            $table->char('respuesta27');
            $table->char('respuesta28');
            $table->char('respuesta29');
            $table->char('respuesta30');
            $table->char('respuesta31');
            $table->char('respuesta32');
            $table->char('respuesta33');
            $table->char('respuesta34');
            $table->char('respuesta35');
            $table->char('respuesta36');
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
        Schema::dropIfExists('conociendo_estilo_aprendizaje');
    }
}
