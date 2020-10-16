<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    public function b_domicilio()
    {
        return $this->belongsTo(B_Domicilio::class);
    }
}
