<?php

namespace App\Http\Controllers\Auth\Alumno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AlumnoLoginController extends Controller
{
    
	public function __construct()
	{
		$this->middleware('guest:alumno');
	}


    public function showLoginForm()
    {
        return view('auth.alumno.alumno-login');
    }

    public function login(Request $request)
    {
    	//Reglas de validacion
    	$rules = [
    		$this->username() => 'required|string',
    		'password' => 'required|min:6',
    	];       

        //Validamos las reglas
    	$this->validate($request,$rules);

    	//dd($request->all());

        //Si existe un alumno con el NIA y el password
    	if(Auth::guard('alumno')->attempt([$this->username() => $request->nia, 'password' => $request->password]))
    	{
            //mandarlo a la ruta
    		return redirect('/alumno');
    	}else{
            //Regresar al login solamente con el  nia
    		return back()->withInput($request->only($this->username()));
    	}

    }

    public function username()
    {
        return 'nia';
    }
}
