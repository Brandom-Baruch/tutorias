<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Padre_familia extends Authenticatable
{
    use Notifiable;

    protected $guard = 'padre';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function b_domicilio()
    {
        return $this->belongsTo(B_Domicilio::class);
    }
    

    public function setCurpAttribute($value)
    {
        $this->attributes['curp'] = strtoupper($value);
    }

}
