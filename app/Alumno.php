<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumno extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'nia'; //Al utilizar find, por defecto laravel colocara id 
    
    protected $guard = 'alumno';
    
    protected $fillable = ['nia','name', 'email', 'password',];
  

    //Relacion entre grupo y alumno
    //Varios alumnos pueden tener un grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function getGrupoNombreAttribute() //Campo calculado
    {
            //Si existe el grupo del alumno
            if($this->grupo){
                //Devolvemos el grupo donde pertenece el alumno
                return $this->grupo->name;
            }else{
                //Si no existe el grupo, colocamos como "SIN GRUPO"
                return 'Sin grupo';
            }
    }

    public function padres()
    {
        return $this->belongsToMany(Padre_familia::class, 'parentezcos','alumno_id','padre_id')->withPivot('parentezco')->withTimestamps();
    }

    public function domicilios()
    {
        return $this->belongsToMany(Domicilio::class,'_b__domicilio','alumno_id')->withTimestamps();
    }

}
