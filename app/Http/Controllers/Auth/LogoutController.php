<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{	

	//creamos esta clase para saber que guard sera utilizado entre 
	//alumno,docente o padre de familia
	protected function guard()
    {
        return Auth::guard();
    }


    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
