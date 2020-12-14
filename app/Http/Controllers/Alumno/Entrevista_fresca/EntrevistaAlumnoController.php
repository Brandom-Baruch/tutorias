<?php

namespace App\Http\Controllers\Alumno\Entrevista_fresca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entrevista_Fresca_Alumno;
use Carbon\Carbon;

class EntrevistaAlumnoController extends Controller
{
    public function index()
    {                        
        return view('alumno.entrevista_fresca.entrevista_index'); 
    }    

    public function store()
    {		
      $entrevista = new Entrevista_Fresca_Alumno;
      $entrevista->fecha_aplicacion = null;
      $entrevista->descripcion = 'Inicio la entrevista';
      $entrevista->alumno_id = auth()->user()->nia;
      $entrevista->save();            
      return redirect('/alumno/entrevista');
    }

    public function update(Request $request)
    {
      $entrevista =  Entrevista_Fresca_Alumno::where('alumno_id', auth()->user()->nia)->first();
      $entrevista->fecha_aplicacion = Carbon::now();
      $entrevista->descripcion = 'Finalizo la entrevista';            
      $entrevista->save();      
      $mensaje = 'Has finalizado la encuesta "Entrevista fresca". Gracias por compartir esta información eres lo más importante para nosotros.';      
      return redirect('/alumno/encuestas')->with(compact('mensaje'));
    }
}
