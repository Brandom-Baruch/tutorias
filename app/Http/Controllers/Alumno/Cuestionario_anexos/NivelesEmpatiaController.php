<?php

namespace App\Http\Controllers\Alumno\Cuestionario_anexos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Nivel_Empatia;

class NivelesEmpatiaController extends Controller
{
    public function create()
    {
    	return view('alumno.cuestionario_anexos.niveles_empatia');
    }

    public function store(Request $request)
    {
    	$niveles_empatia = new Nivel_Empatia;    	
		$niveles_empatia->cuestionario_id = auth()->user()->cuestionario_anexo->id;            
        $niveles_empatia->respuesta1 = $request->input('respuesta1');
        $niveles_empatia->respuesta2 = $request->input('respuesta2');
        $niveles_empatia->respuesta3 = $request->input('respuesta3');
        $niveles_empatia->respuesta4 = $request->input('respuesta4');
        $niveles_empatia->respuesta5 = $request->input('respuesta5');
        $niveles_empatia->respuesta6 = $request->input('respuesta6');
        $niveles_empatia->respuesta7 = $request->input('respuesta7');
        $niveles_empatia->respuesta8 = $request->input('respuesta8');
        $niveles_empatia->respuesta9 = $request->input('respuesta9');  
        $niveles_empatia->save();
        $mensaje = 'Has realizado el cuestionario "Niveles de empatía" exitosamente';
        return redirect('alumno/cuestionario')->with(compact('mensaje'));
    }
}
