<?php

namespace App\Http\Controllers\Padre_familia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Padre_familia as padre;

class PadreController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:padre');
    }

    public function index()
    {
    	return view('padre_familia.padre_home');
    }

    public function edit()
    {    	
    	return view('padre_familia.padre_edit');
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
            $padre->curp = $request->input('curp');
            $padre->telefono_fijo = $request->input('telefono_fijo');
            $padre->telefono_cel = $request->input('telefono_cel');
            $padre->profesion = $request->input('profesion');
            $padre->ocupacion = $request->input('ocupacion');
            $padre->escolaridad = $request->input('escolaridad');
            $padre->estado_civil = $request->input('estado_civil');            
            $padre->remember_token = str_random(100);
            $padre->save();
            $mensaje = 'Se ha actualizado los datos exitosamente';
            return redirect('/padre_familia')->with(compact('mensaje'));
    }    

}
