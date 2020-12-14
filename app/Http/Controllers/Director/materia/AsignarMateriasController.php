<?php

namespace App\Http\Controllers\Director\materia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Imparte;
use App\Docente;

class AsignarMateriasController extends Controller
{
    public function index(Request $request,$id)    
    {   
        $request->user()->autorizarPuestos('Director'); 
        $materia = Materia::find($id);        
        $docentes = Docente::all();
        return view('director.materia.asignar_docente.asignar_docente_index')
        ->with(compact('materia','docentes'));
    }
    

    public function store(Request $request , $id)
    {   

        $materia = Materia::find($id);
        $imparte = new Imparte;
        $imparte->docente_id = $request->input('docente_id');
        $imparte->materia_id = $materia->id;
        $imparte->save();
        $mensaje = 'Se ha  asignado un docente para la materia ' .$materia->name;
        return back()->with(compact('mensaje'));
    }

    public function destroy($materia_id , $docente_id)
    {        
        $materia = Materia::find($materia_id);
        $materia->docentes()->detach($docente_id);        
        $mensaje = 'Se ha eliminado la materia exitosamente';
        return back()->with(compact('mensaje'));
    }
}
