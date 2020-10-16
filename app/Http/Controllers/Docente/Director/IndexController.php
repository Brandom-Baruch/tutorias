<?php

namespace App\Http\Controllers\Docente\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Docente;
use App\Padre_familia as padre;
use App\Alumno;
use App\Materia;

class IndexController extends Controller
{
    
	public function index()
    {
    	$docentes = Docente::paginate(10);
    	$padres = padre::paginate(10);
    	$alumnos = Alumno::paginate(10);
    	$materias = Materia::paginate(10);    	
        return view('docente.director.index')->with(compact('docentes','padres','alumnos','materias'));
    }
}
