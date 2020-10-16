<?php

namespace App\Http\Controllers\Docente\Director;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Padre_familia as padre;

class PadreFamiliaController extends Controller
{
    public function create()
    {
    	return view('docente.director.padre_familia.create');
    }

    public function store(Request $request)
    {
    	//Reglas de validación
    	$rules = [
    		'name' => 'required|min:3',
            'apellidoP' => 'required|min:4',
            'apellidoM' => 'required|min:4',
            'email' => 'required|unique:padre_familias|max:250',
            'password' => 'required|string|min:6|confirmed',
            'edad' => 'required|numeric|min:18|max:70',
            'curp' => 'required|unique:padre_familias|max:18|string',
            'telefono_fijo' => 'required',
            'telefono_cel' => 'required',
            'profesion' => 'required',
            'ocupacion' => 'required',
            //'escolaridad' => 'required',
            //'estado_civil' => 'required',
    	];    	 	

    	$message = [
    		'name.required' => 'Debes de agregar un nombre',
    		'name.min' => 'El nombre debe tener un min de 3 letras',
    		'apellidoP.required' => 'Debes de agregar un apellido parterno',
    		'apellidoP.min' => 'El apellido parterno debe tener por lo menos 4 letras',
    		'apellidoM.required' => 'Debes de agregar un apellido parterno',
    		'apellidoM.min' => 'El apellido parterno debe tener por lo menos 4 letras',
    		'email.required' => 'Debes de agregar un correo electronico',
    		'email.unique' => 'Este correo electroncio ya esta en uso',
    		'email.max' => 'El correo electronico tiene un maximo de 250 caracteres',
    		'password.required' => 'Debes de colocar una contraseña',
    		'password.string' => 'Puedes colocar signos y numeros',
    		'password.min' => 'Una contraseña por lo minimo debe de tener 6 caracteres',
    		'password.confirmed' => 'Las contraseñas no coinciden',
    		'edad.required' => 'Debes de colocar una edad',
    		'edad.numeric' => 'Solo se aceptan numeros',
    		'edad.min' => 'La edad minima es de 18 años',
    		'edad.max' => 'La edad maxima es de 70 años',
    		'curp.required' => 'Debes de colocar una CURP',
    		'curp.unique' => 'Esta CURP ya esta en uso',
    		'curp.max' => 'La CURP debe de tener un maximo de 18 caracteres',
    		'curp.string' => 'LA CURP puede tener numeros y letras',
    		'telefono_fijo.required' => 'Debes de agregar un telefono fijo',
    		'telefono_cel.required' => 'Debes de agregar un telefono celular',
    		'profesion.required' => 'Debes de agregar una profesion',
    		'ocupacion.required' => 'Debes de agregar una ocupacion',
    		//'escolaridad.required' => 'Debes de agregar una escolaridad',
    		//'estado_civil.required' => 'Debes de agregar un estado civil',
    	];
            $this->validate($request,$rules,$message);
			
            $padre = new padre;

            $padre->name = $request->input('name');    		
            $padre->apellidoP = $request->input('apellidoP');
            $padre->apellidoM = $request->input('apellidoM');
            $padre->email = $request->input('email');
            $padre->password = Hash::make($request->input('password'));
            $padre->edad = $request->input('edad');
            $padre->curp = $request->input('curp');
            $padre->telefono_fijo = $request->input('telefono_fijo');
            $padre->telefono_cel = $request->input('telefono_cel');
            $padre->profesion = $request->input('profesion');
            $padre->ocupacion = $request->input('ocupacion');
            $padre->escolaridad = $request->input('escolaridad');
            $padre->estado_civil = $request->input('estado_civil');
			$padre->remember_token = str_random(100);
			$padre->save();
			$mensaje_padre = 'Se ha agregado un nuevo padre de familia llamado ' .$padre->name;
			return redirect('director/index')->with(compact('mensaje_padre'));
    }	

    public function edit ($id)
    {
        $padre = Padre::find($id);
        /*return 'hola ' .$padre->name .
               ' Estado civil '.$padre->estado_civil ;*/
        return view ('docente/director/padre_familia/edit')->with(compact('padre'));
    }

    public function update(Request $request, $id)
    {
        //Reglas de validación
        $rules = [
            'name' => 'required|min:3',
            'apellidoP' => 'required|min:4',
            'apellidoM' => 'required|min:4',
            'email' => 'required|max:250',
            'password' => 'required|string|min:6|confirmed',
            'edad' => 'required|numeric|min:18|max:70',
            'curp' => 'required|max:18|string',
            'telefono_fijo' => 'required',
            'telefono_cel' => 'required',
            'profesion' => 'required',
            'ocupacion' => 'required',            
        ];          

        $message = [
            'name.required' => 'Debes de agregar un nombre',
            'name.min' => 'El nombre debe tener un min de 3 letras',
            'apellidoP.required' => 'Debes de agregar un apellido parterno',
            'apellidoP.min' => 'El apellido parterno debe tener por lo menos 4 letras',
            'apellidoM.required' => 'Debes de agregar un apellido parterno',
            'apellidoM.min' => 'El apellido parterno debe tener por lo menos 4 letras',
            'email.required' => 'Debes de agregar un correo electronico',            
            'email.max' => 'El correo electronico tiene un maximo de 250 caracteres',
            'password.required' => 'Debes de colocar una contraseña',
            'password.string' => 'Puedes colocar signos y numeros',
            'password.min' => 'Una contraseña por lo minimo debe de tener 6 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'edad.required' => 'Debes de colocar una edad',
            'edad.numeric' => 'Solo se aceptan numeros',
            'edad.min' => 'La edad minima es de 18 años',
            'edad.max' => 'La edad maxima es de 70 años',
            'curp.required' => 'Debes de colocar una CURP',                
            'curp.max' => 'La CURP debe de tener un maximo de 18 caracteres',
            'curp.string' => 'LA CURP puede tener numeros y letras',
            'telefono_fijo.required' => 'Debes de agregar un telefono fijo',
            'telefono_cel.required' => 'Debes de agregar un telefono celular',
            'profesion.required' => 'Debes de agregar una profesion',
            'ocupacion.required' => 'Debes de agregar una ocupacion',            
        ];

        $this->validate($request,$rules,$message);
        //dd($request->all());

            $padre = padre::find($id);

            $padre->name = $request->input('name');            
            $padre->apellidoP = $request->input('apellidoP');
            $padre->apellidoM = $request->input('apellidoM');
            $padre->email = $request->input('email');
            $padre->password = Hash::make($request->input('password'));
            $padre->edad = $request->input('edad');
            $padre->curp = strtoupper($request->input('curp'));
            $padre->telefono_fijo = $request->input('telefono_fijo');
            $padre->telefono_cel = $request->input('telefono_cel');
            $padre->profesion = $request->input('profesion');
            $padre->ocupacion = $request->input('ocupacion');
            $padre->escolaridad = $request->input('escolaridad');
            $padre->estado_civil = $request->input('estado_civil');            
            $padre->remember_token = str_random(100);
            $padre->save();
            $mensaje_padre = 'Se ha actualizado los datos del padre de familia llamado ' .$padre->name;
            return redirect('director/index')->with(compact('mensaje_padre'));
    }

    public function destroy($id)
    {
        $padre = Padre::find($id);
        $padre->delete();
        $eliminado_padre = 'Se ha eliminado un padre de familia llamado(a) '.$padre->name;
        return back()->with(compact('eliminado_padre'));
    }
}
