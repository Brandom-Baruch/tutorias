<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumno extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'nia'; //Al utilizar find, por defecto laravel colocara id 
    
    protected $guard = 'alumno';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nia','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

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

    public function b_domicilio()
    {
        return $this->belongsTo(B_Domicilio::class);
    }


}
