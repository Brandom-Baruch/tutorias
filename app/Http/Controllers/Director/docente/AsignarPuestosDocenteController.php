<?php

namespace App\Http\Controllers\Director\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Docente;
use App\Puesto;
use App\PuestoAsignado;

class AsignarPuestosDocenteController extends Controller
{
    public function index(Request $request,$id)
    {
        $request->user()->autorizarPuestos('Director'); 
    	$docente = Docente::find($id);
    	$puestos = Puesto::all();
		return view('director.docente.docente_puestos')->with(compact('docente','puestos'));    	
    }

    public function store(Request $request, $id)
    {   
        $docente = Docente::find($id);
        $puesto_asignado = new PuestoAsignado;                      	   
    	$puesto_asignado->docente_id = $docente->id;
		$puesto_asignado->puesto_id = $request->input('puesto_id');
		$puesto_asignado->save();
		$mensaje = 'Se ha  asignado un puesto exitosamente ';
        return back()->with(compact('mensaje'));
    }

    public function destroy ($docente_id , $puesto_id)    
    {        
        $docente = Docente::find($docente_id);
        $docente->puestos()->detach($puesto_id);
        $eliminado = 'Se ha eliminado el puesto  exitosamente';
        return back()->with(compact('eliminado'));
    }
}
