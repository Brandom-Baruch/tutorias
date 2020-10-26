<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Padre_familia as padre;
use App\Alumno;
use App\Parentezco;

class AsignarAlumnosPadreController extends Controller
{
   
    public function index($id)
    {
        $padre = padre::find($id);
        $alumnos = Alumno::all();
        return view('director.padre_familia.padre_parentezco')->with(compact('padre','alumnos'));
    }


    public function store(Request $request, $id)    
    {
        $padre = padre::find($id);
        $parentezco = new Parentezco;
        $parentezco->parentezco = $request->input('parentezco');
        $parentezco->alumno_id = $request->input('alumno_id');
        $parentezco->padre_id = $padre->id;
        $parentezco->save();
        return back();
    }
    
    public function destroy($padre_id , $alumno_id)
    {        
        $padre = padre::find($padre_id);
        $padre->alumnos()->detach($alumno_id);        
        $mensaje = 'Se ha eliminado el alumno exitosamente';
        return back()->with(compact('mensaje'));
    }
}
