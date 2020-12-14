<?php

namespace App\Http\Controllers\Docente\Tutorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Padre_familia;
use App\Entrevista_Fresca_Alumno;
use App\Entrevista_Fresca_Padre;
use App\Cuestionario_Anexos;
use App\Atencion_Individualizada;
use App\Perfil_Academico_Alumno;
use App\Test;
class TutoriasController extends Controller
{
    public function encuestas_index()
    {        
        $docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $materia_grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo
        $grupo_alumno = $materia_grupo->alumnos()->where('grupo_id',$materia_grupo->id)->get(); //Grupo/alumno   
    	return view('docente.tutorias.docente_tutor')->with(compact('materia_grupo','grupo_alumno'));
    }

    public function entrevista_fresca_alumno($alumno_id)
    {
        $alumno = Alumno::find($alumno_id);
        $entrevista = Entrevista_Fresca_Alumno::where('alumno_id',$alumno->nia)->first();        
        return view('docente.tutorias.resultados.alumno.entrevista_frescaR')->with(compact('entrevista','alumno'));
    }

    public function entrevista_padre($alumno_id)
    {                    
        $entrevista = Entrevista_Fresca_Padre::where('alumno_id',$alumno_id)->first();                
        //$marca_x = MarcaX::all();   
        //dd($marca_x);
        return view('docente.tutorias.resultados.padre.resultados_padre')->with(compact('entrevista'));
    }

    public function anexos_alumno($alumno_id)
    {
        $alumno = Alumno::find($alumno_id);
        $cuestionario = Cuestionario_Anexos::where('alumno_id',$alumno->nia)->first();
        //dd($cuestionario->atribucion);
        return view('docente.tutorias.resultados.alumno.cuestionario_anexosR')->with(compact('cuestionario','alumno'));
    }

    public function estilo_aprendizaje_alumno($alumno_id)
    {   
        $alumno = Alumno::find($alumno_id);
        $test = Test::where('alumno_id',$alumno->nia)->first();
        return view('docente.tutorias.resultados.alumno.estilo_aprendizajeR')->with(compact('test','alumno'));
    }

    public function atencion_individual_alumno($alumno_id)
    {
        $alumno = Alumno::find($alumno_id);
        $test = Atencion_Individualizada::where('alumno_id',$alumno->nia)->first();
        return view('docente.tutorias.resultados.alumno.atencion_individualR')->with(compact('test','alumno'));
    }

    public function perfil_academico_alumno($alumno_id)
    {
        $alumno = Alumno::find($alumno_id);
        $cuestionario = Perfil_Academico_Alumno::where('alumno_id',$alumno->nia)->first();
        return view('docente.tutorias.resultados.alumno.perfil_academicoR')->with(compact('cuestionario','alumno'));
    }
}
