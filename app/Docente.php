<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Docente extends Authenticatable
{
 
    protected $guard = 'docente';

    protected $fillable = ['name', 'email', 'password'];

    public function puestos()
    {
        return $this->belongsToMany(Puesto::class,'puesto_asignados')->withTimestamps();
    }
  
    public function autorizarPuestos($puestos)
    {
        if($this->hasAnyPuesto($puestos))
        {
            return true;
        }
        abort(401, 'No autorizado');        
    }

    public function hasAnyPuesto($puestos)
    {
        if (is_array($puestos)) {// Si el docente tiene varios puestos, creamos un arreglo
            //Recorremos los puestos que tiene le docente                
            foreach ($puestos as $puesto) {
                if ($this->tiene_Puesto($puestos)) {
                return true;
                }
            }

        }else{ //Si solamente tiene un puesto
            if ($this->tiene_Puesto($puestos)) {
                return true;
            }
        }
        return false;
    }

    public function tiene_Puesto($puesto)
    {
        if ($this->puestos()->where('puesto',$puesto)->first()) {
            return true;
        }
            return false;
    }

    public function materias()
    {
        return $this->belongsToMany(Materia::class,'imparte')->withPivot('materia_id')->withTimestamps();
    }

    public function domicilios()
    {
        return $this->belongsToMany(Domicilio::class,'_b__domicilio','docente_id')->withTimestamps();
    }

    public function alumnos_bajo_rendimiento()
    {
        return $this->hasMany(Alumno_Bajo_Rendimiento::class,'tutor_id');
    }

    public function reporte_tutorias()
    {
        return $this->hasMany(Reporte_Tutorias::class,'tutor_id');
    }

    public function control_asistencias()
    {
        return $this->hasMany(Control_Asistencia::class,'tutor_id');
    }

    public function reporte_tutoria_grupal()
    {
        return $this->hasOne(Reporte_Tutoria_Grupal::class,'tutor_id');
    }

}   
