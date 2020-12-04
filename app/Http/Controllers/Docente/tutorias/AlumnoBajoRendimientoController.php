<?php

namespace App\Http\Controllers\Docente\Tutorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Docente;
use App\Alumno_Bajo_Rendimiento;
class AlumnoBajoRendimientoController extends Controller
{
    public function index()
    {
	 	$docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $materia_grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo
        $reporte = auth()->user()->alumnos_bajo_rendimiento;        
        //$reporte = Alumno_Bajo_Rendimiento::where('grupo',"$materia_grupo->name $materia_grupo->semestre $materia_grupo->grupo")->get();       
    	return view('docente.tutorias.bajo_rendimiento.alumnos_bajo_rendimiento')->with(compact('materia_grupo','reporte'));
    }

    public function create(Request $request)
    {    	
    	$docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $materia_grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo
        $materias = $materia_grupo->materias()->get();              
        $docentes = Docente::all();
    	return view('docente.tutorias.bajo_rendimiento.alumno_bajo_rendimiento_create')->with(compact('materias','docentes','materia_grupo'));
    }

    public function store(Request $request)
    {
        $alumnos_bajo_rendimiento = new Alumno_Bajo_Rendimiento;
        $alumnos_bajo_rendimiento->materia_name = $request->input('materia_name');  
        $alumnos_bajo_rendimiento->docente_name = $request->input('docente_name');
        $alumnos_bajo_rendimiento->tutor_id = auth()->user()->id;        
        $alumnos_bajo_rendimiento->total_alumnos = $request->input('total_alumnos');
        $alumnos_bajo_rendimiento->grupo = $request->input('grupo');
        $alumnos_bajo_rendimiento->porcentaje = $request->input('porcentaje');
        $alumnos_bajo_rendimiento->save();
        $mensaje = 'Has ingresado el reporte exitosamente';
        return redirect('/docente/tutorias/alumnos_bajo_rendimiento')->with(compact('mensaje'));
    } 

    public function destroy($rendimiento_id)
    {
        $reporte = Alumno_Bajo_Rendimiento::find($rendimiento_id);
        $reporte->delete();
        $eliminado = 'Se ha eliminado reporte de la materia ' .$reporte->materia_name;
        return back()->with(compact('eliminado'));
    }
}
