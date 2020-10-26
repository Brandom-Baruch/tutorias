<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlumnoController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:alumno');
    }


    public function index()
    {
        return view('alumno.alumno_home');
    }
}
