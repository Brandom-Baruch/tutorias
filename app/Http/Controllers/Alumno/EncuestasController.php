<?php

namespace App\Http\Controllers\Alumno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Cuestionario_Anexos;

class EncuestasController extends Controller
{
	public function index()
	{
		return view('alumno.encuestas_index');
	}

}