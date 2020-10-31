<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function setClaveAttribute($clave) 
    {
        $this->attributes['clave'] = strtoupper($clave);
    }
   

   public function docentes()
   {
   		return $this->belongsToMany(Docente::class,'imparte')->withTimestamps();
   }

   	public function grupos()
    {
        return $this->belongsToMany(Grupo::class,'asignadas','materia_id')->withTimestamps();
    }
}
