<?php

namespace App\Http\Controllers\Docente\Tutorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Padre_familia;
use App\Entrevista_Fresca_Alumno;
use App\Entrevista_Fresca_Padre;
class TutoriasController extends Controller
{
    public function index()
    {        
        $docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $materia_grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo
        $grupo_alumno = $materia_grupo->alumnos()->where('grupo_id',$materia_grupo->id)->get(); //Grupo/alumno                   
    	return view('docente.tutorias.docente_tutor')->with(compact('materia_grupo','grupo_alumno'));
    }

    public function entrevista_alumno($alumno_id)
    {
        $alumno = Alumno::find($alumno_id);
        $entrevista = Entrevista_Fresca_Alumno::where('alumno_id',$alumno->nia)->first();        
        return view('docente.tutorias.resultados_alumno')->with(compact('entrevista','alumno'));
    }

    public function entrevista_padre($alumno_id)
    {                    
        $entrevista = Entrevista_Fresca_Padre::where('alumno_id',$alumno_id)->first();                
        //$marca_x = MarcaX::all();   
        //dd($marca_x);
        return view('docente.tutorias.resultados_padre')->with(compact('entrevista'));
    }
}
