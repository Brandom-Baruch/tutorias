<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcaXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_x', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entrevista_id')->unsigned();
            $table->foreign('entrevista_id')->references('id')->on('entrevista_fresca_padres');
            $table->string('r1');
            $table->string('r1_2');
            $table->string('r1_3');
            $table->string('r2');
            $table->string('r2_2');
            $table->string('r2_3');
            $table->string('r3');
            $table->string('r3_2');
            $table->string('r3_3');
            $table->string('r4');
            $table->string('r4_2');
            $table->string('r4_3');
            $table->string('r5');
            $table->string('r5_2');
            $table->string('r5_3');
            $table->string('r6');
            $table->string('r6_2');
            $table->string('r6_3');
            $table->string('r7');
            $table->string('r7_2');
            $table->string('r7_3');
            $table->string('r8');
            $table->string('r8_2');
            $table->string('r8_3');
            $table->string('r9');
            $table->string('r9_2');
            $table->string('r9_3');
            $table->string('r10');
            $table->string('r10_2');
            $table->string('r10_3');            
            $table->string('r11');
            $table->string('r11_2');
            $table->string('r11_3');
            $table->string('r12');
            $table->string('r12_2');
            $table->string('r12_3');
            $table->string('r13');
            $table->string('r13_2');
            $table->string('r13_3');
            $table->string('r14');
            $table->string('r14_2');
            $table->string('r14_3');
            $table->string('r15');
            $table->string('r15_2');
            $table->string('r15_3');
            $table->string('r16');
            $table->string('r16_2');
            $table->string('r16_3');
            $table->string('r17');
            $table->string('r17_2');
            $table->string('r17_3');
            $table->string('r18');
            $table->string('r18_2');
            $table->string('r18_3');
            $table->string('r19');
            $table->string('r19_2');
            $table->string('r19_3');
            $table->string('r20');
            $table->string('r20_2');
            $table->string('r20_3');
            $table->string('r21');
            $table->string('r21_2');
            $table->string('r21_3');
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
        Schema::dropIfExists('marca_x');
    }
}
