<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';

    public function conociendo_estilo_aprendizaje()
    {
    	return $this->hasOne(Conociendo_Estilo_Aprendizaje::class,'test_id','id');
    }

    public function encontrar_estilo_aprendizaje()
    {
    	return $this->hasOne(Encontrar_Estilo_Aprendizaje::class,'test_id','id');
    }

    public function test_habito_estudio()
    {
    	return $this->hasOne(Test_Habito_Estudio::class, 'test_id','id');
    }
}
