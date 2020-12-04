<?php

namespace App\Http\Controllers\Alumno\Cuestionario_Perfil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Perfil_Academico_Alumno;

class PerfilAcademicoAlumnoController extends Controller
{
    public function create()
    {
    	return view('alumno.cuestionario_perfil_academico.perfil_academico_alumno');
    }

    public function store(Request $request)
    {
    	$perfil_academico_alumno = new Perfil_Academico_Alumno;
    	$perfil_academico_alumno->alumno_id = auth()->user()->nia;        
        $perfil_academico_alumno->escuela_procedencia = $request->input('escuela_procedencia');
        $perfil_academico_alumno->ubicacion_escuela = $request->input('ubicacion_escuela');
        $perfil_academico_alumno->respuesta1 = $request->input('respuesta1');
        $perfil_academico_alumno->respuesta2 = $request->input('respuesta2');
        $perfil_academico_alumno->respuesta3 = $request->input('respuesta3');
        $perfil_academico_alumno->respuesta4 = $request->input('respuesta4');
        $perfil_academico_alumno->respuesta5 = $request->input('respuesta5');
        $perfil_academico_alumno->respuesta6 = $request->input('respuesta6');
        $perfil_academico_alumno->respuesta7 = $request->input('respuesta7');
        $perfil_academico_alumno->respuesta8 = $request->input('respuesta8');
        $perfil_academico_alumno->respuesta9 = $request->input('respuesta9');
        $perfil_academico_alumno->respuesta10 = $request->input('respuesta10');
        $perfil_academico_alumno->respuesta11 = $request->input('respuesta11');
        $perfil_academico_alumno->respuesta12 = $request->input('respuesta12');
        $perfil_academico_alumno->respuesta13 = $request->input('respuesta13');
        $perfil_academico_alumno->respuesta14 = $request->input('respuesta14');
        $perfil_academico_alumno->respuesta15 = $request->input('respuesta15');
        $perfil_academico_alumno->save();
        $mensaje = 'Has finalizado el cuestionario "Cuestionario sobre el perfil academico" exitosamente. Gracias!';
        return redirect('/alumno/encuestas')->with(compact('mensaje'));
    }
}
