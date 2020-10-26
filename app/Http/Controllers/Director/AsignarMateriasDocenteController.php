<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Docente;
use App\Imparte;

class AsignarMateriasDocenteController extends Controller
{

	 public function index($id)
    {
    	$docente = Docente::find($id);
    	$materias = Materia::all();
		return view('director.docente.docente_materias')->with(compact('docente','materias'));    	
    }

    public function store(Request $request , $id)
    {   
        
        $docente = Docente::find($id);
        $imparte = new Imparte;                        
        $imparte->docente_id = $docente->id;
        $imparte->materia_id = $request->input('materia_id');
        $imparte->save();
        $mensaje = 'Se ha  agregado la materia exitosamente';
        return back()->with(compact('mensaje'));
    }

    public function destroy($materia_id , $docente_id)
    {        
        $docente = Docente::find($docente_id);
        $docente->docentes()->detach($materia_id);        
        $mensaje = 'Se ha eliminado la materia exitosamente';
        return back()->with(compact('mensaje'));
    }
}
