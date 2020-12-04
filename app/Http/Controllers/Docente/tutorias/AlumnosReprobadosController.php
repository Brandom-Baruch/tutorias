<?php

namespace App\Http\Controllers\Docente\Tutorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumno_Bajo_Rendimiento;
use App\Alumno_Reprobado;
class AlumnosReprobadosController extends Controller
{
    public function create($rendimiento_id)
    {
    	$docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $materia_grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo
        $alumnos = $materia_grupo->alumnos()->get();  
        $alumno_bajo_rendimiento = Alumno_Bajo_Rendimiento::find($rendimiento_id);                
    	return view('docente.tutorias.bajo_rendimiento.alumnos_reprobados')->with(compact('alumnos','alumno_bajo_rendimiento'));
    }

    public function store(Request $request, $rendimiento_id)
    {       
        $rules = [            
            'motivo' => 'required',
            'estrategia_especifica' => 'required',
        ];

        $message =[            
            'motivo.required' => 'Debes de agregar un motivo',
            'estrategia_especifica.required' => 'Debes de agregar una estrategia especifica',
        ];  
        $this->validate($request,$rules,$message);
        
        $alumnos_reprobados = new Alumno_Reprobado;
        $alumno_bajo_rendimiento = Alumno_Bajo_Rendimiento::find($rendimiento_id);
        $alumnos_reprobados->reporte_id = $alumno_bajo_rendimiento->id;        
        $alumnos_reprobados->alumno_name = $request->input('alumno_name');
        $alumnos_reprobados->motivo = $request->input('motivo');
        $alumnos_reprobados->estrategia_especifica = $request->input('estrategia_especifica');
        $alumnos_reprobados->save();
        $mensaje = 'Has registrado al alumno ' .$alumnos_reprobados->alumno_name. ' exitosamente';
        return back()->with(compact('mensaje'));
    }

    public function destroy($alumno_reprobado)
    {
        $reprobado = Alumno_Reprobado::find($alumno_reprobado);
        $reprobado->delete();
        $eliminado = 'Se ha quitado el alumno ' .$reprobado->alumno_name. ' exitosamente';
        return back()->with(compact('eliminado'));
    }
}
