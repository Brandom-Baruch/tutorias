<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Grupo extends Model
{
    //Relacion entre alumno y grupo
    //Un grupo puede tener varios alumnos
	public function alumnos()
	{	
		return $this->hasMany(Alumno::class);
	}
	
	public function materias()
    {
        return $this->belongsToMany(Materia::class,'asignadas','grupo_id')->withTimestamps();
    }   
}
