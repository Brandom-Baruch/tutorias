<?php

namespace App\Http\Controllers\Domicilio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domicilio;
use App\Docente;
use App\B_Domicilio;
use App\Alumno\Alumno;
use App\Padre_familia as padre;

class DomicilioController extends Controller
{

    public function alumno_create(Request $request,$nia)
    {        
        $domicilios = Domicilio::all();                
        return view('alumno.alumno_domicilio')->with(compact('domicilios'));
    }

    public function alumno_store (Request  $request)
    {                   
        $b_domicilio = new B_Domicilio;     
        $b_domicilio->alumno_id = $request->input('alumno_id');
        $b_domicilio->domicilio_id = $request->input('domicilio_id');
        $b_domicilio->save();
        $mensaje = 'Se ha asignado el domicilio exitosamente';
        return redirect('alumno')->with(compact('mensaje'));
    }

    public function alumno_destroy($alumno_id, $domicilio_id)
    {
        $alumno = Alumno::find($alumno_id);
        $alumno->domicilios()->detach($domicilio_id);
        $eliminado = 'Se ha eliminado el domicilio actual';
        return back()->with(compact('eliminado'));
    }

    public function padre_create()
    {        
    	$domicilios = Domicilio::all();    	
    	return view('padre_familia.padre_domicilio')->with(compact('domicilios'));
    }

    public function padre_store (Request  $request, $id)
    {    	
    	$padre = padre::find($id);    	
    	$b_domicilio = new B_Domicilio;    	
    	$b_domicilio->padre_id = $request->input('padre_id');
    	$b_domicilio->domicilio_id = $request->input('domicilio_id');
    	$b_domicilio->save();
    	$mensaje = 'Se ha asignado el domicilio exitosamente';
    	return redirect('/padre_familia')->with(compact('mensaje'));
    }

    public function padre_destroy($padre_id, $domicilio_id)
    {
    	$padre = padre::find($padre_id);    	
	    $padre->domicilios()->detach($domicilio_id);
	    $mensaje = 'Por favor, agrega tu domicilio';
	    return redirect('padre_familia/'.$padre->id.'/domicilio')->with(compact('mensaje'));
    }

    public function docente_create()
    {                
        $domicilios = Domicilio::all();        
        return view('docente.docente_domicilio')->with(compact('domicilios'));
    }

    public function docente_store (Request  $request, $id)
    {       
        $docente = Docente::find($id);      
        $b_domicilio = new B_Domicilio;     
        $b_domicilio->docente_id = $request->input('docente_id');
        $b_domicilio->domicilio_id = $request->input('domicilio_id');
        $b_domicilio->save();
        $mensaje = 'Se ha asignado el domicilio exitosamente';
        return redirect('docente')->with(compact('mensaje'));
    }

    public function docente_destroy($docente_id, $domicilio_id)
    {
        $docente = Docente::find($docente_id);
        $docente->domicilios()->detach($domicilio_id);
        $mensaje = 'Por favor, agrega tu domicilio';
        return redirect('docente/'.$docente->id.'/domicilio')->with(compact('mensaje'));
    }
}
