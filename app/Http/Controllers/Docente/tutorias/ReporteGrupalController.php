<?php

namespace App\Http\Controllers\Docente\Tutorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reporte_Tutoria_Grupal;
use App\Indice_Reprobacion;
use App\Alumnos_Certifican;
use App\Indice_Regularizacion;

class ReporteGrupalController extends Controller
{
    public function index()
    {
        $reporte = Reporte_Tutoria_Grupal::where('tutor_id',auth()->user()->id)->first();
        $docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo
    	return view('docente.tutorias.reporte_grupal.reporte_grupal_index')->with(compact('reporte','grupo'));
    }

    public function create()
    {
    	$docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo
    	//dd($materia_grupo->alumnos()->count());
       // dd(auth()->user()->reporte_tutoria_grupal->indice_reprobacion->id);
    	return view('docente.tutorias.reporte_grupal.reporte_grupal_create')->with(compact('grupo'));	
    }

    public function store(Request $request)
    {

        $reporte_grupal = new Reporte_Tutoria_Grupal;
        $reporte_grupal->tutor_id = auth()->user()->id;
        $reporte_grupal->bajas = $request->input('bajas');
        $reporte_grupal->altas = $request->input('altas');
        $reporte_grupal->porcentaje_eficiencia = $request->input('porcentaje_eficiencia');
        $reporte_grupal->save();

        $reprobacion = new Indice_Reprobacion;
        $reprobacion->semanaA = $request->input('semanaAR');
        $reprobacion->semanaB = $request->input('semanaBR');
        $reprobacion->semanaC = $request->input('semanaCR');
        $reprobacion->semanaD = $request->input('semanaDR');
        $reprobacion->semanaE = $request->input('semanaER');
        $reprobacion->reporte_id = auth()->user()->reporte_tutoria_grupal->id;
        $reprobacion->save();
        
        $regularizacion = new Indice_Regularizacion;
        $regularizacion->semanaA = $request->input('semanaA');
        $regularizacion->semanaB = $request->input('semanaB');
        $regularizacion->semanaC = $request->input('semanaC');
        $regularizacion->semanaD = $request->input('semanaD');
        $regularizacion->semanaE = $request->input('semanaE');
        $regularizacion->reporte_id = auth()->user()->reporte_tutoria_grupal->id;
        $regularizacion->save();

        $alumno_cerfiticacion = new Alumnos_Certifican;
        $alumno_cerfiticacion->hombres = $request->input('hombres');
        $alumno_cerfiticacion->mujeres = $request->input('mujeres');
        $alumno_cerfiticacion->reporte_id = auth()->user()->reporte_tutoria_grupal->id;
        $alumno_cerfiticacion->save();

        $mensaje = 'Has realizado el reporte existosamente';
        return redirect('/docente/tutorias/reporte_grupal')->with(compact('mensaje'));
    }


    public function edit($reporte_id)
    {
        $docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo
        $reprobacion = Indice_Reprobacion::where('reporte_id',auth()->user()->reporte_tutoria_grupal->id)->first();
        $regularizacion = Indice_Regularizacion::where('reporte_id',auth()->user()->reporte_tutoria_grupal->id)->first();
        $certificacion = Alumnos_Certifican::where('reporte_id',auth()->user()->reporte_tutoria_grupal->id)->first();
        //dd($reprobacion); 
        $reporte = Reporte_Tutoria_Grupal::find($reporte_id);
        return view('docente.tutorias.reporte_grupal.reporte_grupal_edit')->with(compact('grupo','reprobacion','regularizacion','certificacion','reporte'));
    }

    public function update(Request $request, $reporte_id)
    {   
        $reporte = Reporte_Tutoria_Grupal::find($reporte_id);
        $reprobacion = Indice_Reprobacion::where('reporte_id',auth()->user()->reporte_tutoria_grupal->id)->first();
        $regularizacion = Indice_Regularizacion::where('reporte_id',auth()->user()->reporte_tutoria_grupal->id)->first();
        $certificacion = Alumnos_Certifican::where('reporte_id',auth()->user()->reporte_tutoria_grupal->id)->first();
        //indice de reprobacion
        $reprobacion->semanaA = $request->input('semanaAR');
        $reprobacion->semanaB = $request->input('semanaBR');
        $reprobacion->semanaC = $request->input('semanaCR');
        $reprobacion->semanaD = $request->input('semanaDR');
        $reprobacion->semanaE = $request->input('semanaER');
        $reprobacion->reporte_id = auth()->user()->reporte_tutoria_grupal->id;
        $reprobacion->save();
        //final
        //indice de regularizacion
        $regularizacion->semanaA = $request->input('semanaA');
        $regularizacion->semanaB = $request->input('semanaB');
        $regularizacion->semanaC = $request->input('semanaC');
        $regularizacion->semanaD = $request->input('semanaD');
        $regularizacion->semanaE = $request->input('semanaE');
        $regularizacion->reporte_id = auth()->user()->reporte_tutoria_grupal->id;
        $regularizacion->save();
        //final
        //alumno certificado
        $certificacion->hombres = $request->input('hombres');
        $certificacion->mujeres = $request->input('mujeres');
        $certificacion->reporte_id = auth()->user()->reporte_tutoria_grupal->id;
        $certificacion->save();
        //fin
        //reporte
        $reporte->tutor_id = auth()->user()->id;
        $reporte->bajas = $request->input('bajas');
        $reporte->altas = $request->input('altas');
        $reporte->porcentaje_eficiencia = $request->input('porcentaje_eficiencia');
        $reporte->save();
        $mensaje = 'Has actualizado el registro exitosamente';
        return redirect('/docente/tutorias/reporte_grupal')->with(compact('mensaje'));
        //fin
    }

    public function destroy($reporte_id)
    {
        $reprobacion = Indice_Reprobacion::where('reporte_id',auth()->user()->reporte_tutoria_grupal->id)->first();
        $reprobacion->delete();
        $regularizacion = Indice_Regularizacion::where('reporte_id',auth()->user()->reporte_tutoria_grupal->id)->first();
        $regularizacion->delete();
        $certificacion = Alumnos_Certifican::where('reporte_id',auth()->user()->reporte_tutoria_grupal->id)->first();
        $certificacion->delete();
        $reporte = Reporte_Tutoria_Grupal::find($reporte_id);
        $reporte->delete();
        $eliminado = 'Se ha eliminado el registro exitosamente';
        return back()->with(compact('eliminado'));
    }
}
