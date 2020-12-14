<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuestionario_Anexos extends Model
{
    protected $table = 'cuestionario_anexos';


    public function alumnos()
    {
        return $this->hasMany(Alumno::class,'nia','alumno_id');
    }

    public function atribucion()
    {
    	return $this->hasOne(Atribucion::class,'cuestionario_id','id');
    }

    public function nivel_empatia()
    {
    	return $this->hasOne(Nivel_Empatia::class,'cuestionario_id','id');
    }

    public function tipo_mentalidad()
    {
        return $this->hasOne(Tipo_Mentalidad::class,'cuestionario_id','id');
    }

}
