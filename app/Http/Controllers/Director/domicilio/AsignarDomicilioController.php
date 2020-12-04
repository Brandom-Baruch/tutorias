<?php

namespace App\Http\Controllers\Director\domicilio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Padre_familia as padre;
use App\Domicilio;
use App\Docente;
use App\B_Domicilio;
use App\Alumno;

class AsignarDomicilioController extends Controller
{
    public function padre_create(Request $request,$id)
    {
        $request->user()->autorizarPuestos('Director'); 
    	$domicilios = Domicilio::all();
    	$padre = padre::find($id);
    	return view('director.domicilio.asignar_domicilio.padre_domicilio')->with(compact('padre', 'domicilios'));
    }

    public function padre_store (Request  $request, $id)
    {    	
    	$padre = padre::find($id);    	
    	$b_domicilio = new B_Domicilio;    	
    	$b_domicilio->padre_id = $request->input('padre_id');
    	$b_domicilio->domicilio_id = $request->input('domicilio_id');
    	$b_domicilio->save();
    	$mensaje = 'Se ha asignado el domicilio exitosamente';
    	return redirect('director/padre_familia/'.$request->input('padre_id').'/show')->with(compact('mensaje'));
    }

    public function padre_destroy($padre_id, $domicilio_id)
    {
    	$padre = padre::find($padre_id);    	
	    $padre->domicilios()->detach($domicilio_id);
	    $eliminado = 'Se ha eliminado el domicilio actual';
	    return back()->with(compact('eliminado'));
    }

    //Alumno

    public function alumno_create(Request $request,$nia)
    {
        $request->user()->autorizarPuestos('Director'); 
        $domicilios = Domicilio::all();
        $alumno = Alumno::find($nia);
        return view('director.domicilio.asignar_domicilio.alumno_domicilio')->with(compact('alumno', 'domicilios'));
    }

    public function alumno_store (Request  $request)
    {                   
        $b_domicilio = new B_Domicilio;     
        $b_domicilio->alumno_id = $request->input('alumno_id');
        $b_domicilio->domicilio_id = $request->input('domicilio_id');
        $b_domicilio->save();
        $mensaje = 'Se ha asignado el domicilio exitosamente';
        return redirect('director/alumno/'.$request->input('alumno_id').'/show')->with(compact('mensaje'));
    }

    public function alumno_destroy($alumno_id, $domicilio_id)
    {
        $alumno = Alumno::find($alumno_id);
        $alumno->domicilios()->detach($domicilio_id);
        $eliminado = 'Se ha eliminado el domicilio actual, escoge un domicilio nuevo';
        return redirect('/director/alumno/'.$alumno->nia.'/domicilio')->with(compact('eliminado'));
    }


    public function docente_create(Request $request,$id)
    {
        $request->user()->autorizarPuestos('Director'); 
        $docente = Docente::find($id);
        $domicilios = Domicilio::all();
        return view('director.domicilio.asignar_domicilio.docente_domicilio')->with(compact('docente','domicilios'));
    }

    public function docente_store (Request  $request, $id)
    {       
        $docente = Docente::find($id);      
        $b_domicilio = new B_Domicilio;     
        $b_domicilio->docente_id = $request->input('docente_id');
        $b_domicilio->domicilio_id = $request->input('domicilio_id');
        $b_domicilio->save();
        $mensaje = 'Se ha asignado el domicilio exitosamente';
        return redirect('director/docente/'.$request->input('docente_id').'/view')->with(compact('mensaje'));
    }

    public function docente_destroy($docente_id, $domicilio_id)
    {
        $docente = Docente::find($docente_id);
        $docente->domicilios()->detach($domicilio_id);
        $mensaje = 'Por favor, agrega tu domicilio';
        return redirect('director/docente/'.$docente->id.'/domicilio')->with(compact('mensaje'));
    }
}
