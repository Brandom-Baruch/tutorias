<?php

namespace App\Http\Controllers\Padre_familia\Entrevista_fresca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entrevista_Fresca_Padre;
use Carbon\Carbon;
use App\Alumno;
use App\Padre_familia;

class EntrevistaPadreController extends Controller
{
	public function index()
	{		  
        
		return view('padre_familia.entrevista_fresca.entrevista_index');
	}

	public function store(Request $request)
	{		
		$entrevista = new Entrevista_Fresca_Padre;		
		$entrevista->fecha_aplicacion = null;	
        $entrevista->descripcion = 'Inicio la entrevista';
        $entrevista->alumno_id = $request->input('alumno_id');
        $entrevista->padre_id = auth()->user()->id;
        $entrevista->save();
        return redirect('/padre_familia/entrevista/'.$request->input('alumno_id').'/secciones');
    }

    public function secciones($alumno_id)
    {    
    	$alumno = Alumno::find($alumno_id);
    	return view('padre_familia.entrevista_fresca.secciones')->with(compact('alumno'));
    }

    public function update(Request $request, $alumno_id)
    {
        $alumno = Alumno::find($alumno_id);
        $entrevista = Entrevista_Fresca_Padre::where('alumno_id',$alumno->nia)->first();
        $entrevista->fecha_aplicacion = Carbon::now();
        $entrevista->descripcion = 'Finalizo la entrevista';
        $entrevista->save();
        $mensaje = 'Gracias por compartir esta información usted es lo más importante para nosotros ' . $alumno->nia;
        return redirect('/padre_familia')->with(compact('mensaje'));
    }
}
