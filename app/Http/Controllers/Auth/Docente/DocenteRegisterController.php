<?php

namespace App\Http\Controllers\Auth\Docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocenteRegisterController extends Controller
{

	public function __construct ()
	{

		$this->middleware('guest:docente',['only' => 'showRegisterForm']);

	}

    public function showRegisterForm()
    {
    	return view('auth.docente.docente-register');
    }
}
