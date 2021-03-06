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
    	//validation
    	$rules = [
    		$this->username() => 'required|string',
    		'password' => 'required|min:6',
    	];       

    	$this->validate($request,$rules);

    	//dd($request->all());

    	if(Auth::guard('alumno')->attempt([$this->username() => $request->nia, 'password' => $request->password]))
    	{
    		return redirect('/alumno');
    	}else{
    		return back()->withInput($request->only($this->username()));
    	}

    }

    public function username()
    {
        return 'nia';
    }
}
