<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control_Asistencia extends Model
{
    protected $table = 'control_asistencia';

    public function alumnos()
	{	
		return $this->hasMany(Alumno::class,'nia','alumno_nia');
	}
}
