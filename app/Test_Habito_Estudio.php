<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test_Habito_Estudio extends Model
{
    protected $table = 'test_habito_estudio';

    public function planificacion()
    {
    	return $this->hasOne(Planificacion::class,'habito_id','id');
    }

    public function organizacion_tiempo()
    {
    	return $this->hasOne(Organizacion_Tiempo::class,'habito_id','id');
    }

    public function estrategias_aprendizaje()
    {
    	return $this->hasOne(Estrategias_Aprendizaje::class,'habito_id','id');
    }

}
