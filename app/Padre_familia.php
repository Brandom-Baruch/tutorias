<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Padre_familia extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = "id";

    protected $guard = 'padre';
 
    protected $fillable = ['name', 'email', 'password',];    

    public function setCurpAttribute($value)
    {
        $this->attributes['curp'] = strtoupper($value);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'parentezcos','padre_id','alumno_id')->withPivot('parentezco')->withTimestamps();
    }

}
