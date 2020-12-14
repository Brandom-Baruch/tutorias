<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrevista_Fresca_Padre extends Model
{
    protected $table = 'entrevista_fresca_padres';
    protected $primaryKey = 'id';

    public function padres()
    {
        return $this->hasMany(Padre_familia::class,'id','padre_id');
    }

    public function marca_x()
    {
    	return $this->hasOne(MarcaX::class,'entrevista_id','id');
    }

    public function marca_si_no()
    {
    	return $this->hasOne(MarcaSiNo::class,'entrevista_id','id');
    }
}
