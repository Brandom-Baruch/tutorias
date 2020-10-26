<?php

namespace App\Http\Controllers\Docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocenteController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:docente');
    }

    public function index(Request $request)
    {       	 
    	return view('docente.docente_home');
    }
}
