<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domicilio;

class DomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domicilios = Domicilio::all();
        return view('director.domicilio.domicilio_index')->with(compact('domicilios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('director.domicilio.domicilio_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'estado' => 'required',
            'municipio' => 'required',
            'localidad' => 'required',
            'calle' => 'required',
            'cp' => 'required',
            'colonia' => 'required',
            'no_interior' => 'required',
            'no_exterior' => 'required',
        ];

        $message = [
            'estado.required' => 'Debes de agregar el estado donde pertenece',
            'municipio.required' => 'Debes de agregar el municipio donde pertenece ',
            'localidad.required' => 'Debes de agregar la localidad donde pertenece',
            'calle.required' => 'Debes de agregar  la calle donde pertenece',
            'cp.required' => 'Debes de agregar  el codigo postal donde pertenece',
            'colonia.required' => 'Debes de agregar la colonia donde pertenece',
            'no_interior.required' => 'Debes de agregar el No interior si tiene',
            'no_exterior.required' => 'Debes de agregar el No exterior si tiene',
        ]; 

        $this->validate($request , $rules , $message);

        $domicilio = new Domicilio;

        $domicilio->estado = $request->input('estado');
        $domicilio->municipio = $request->input('municipio');
        $domicilio->localidad = $request->input('localidad');
        $domicilio->calle = $request->input('calle');
        $domicilio->cp = $request->input('cp');
        $domicilio->colonia = $request->input('colonia');
        $domicilio->no_interior = $request->input('no_interior');
        $domicilio->no_exterior = $request->input('no_exterior');
        $domicilio->save();
        $mensaje = 'Se ha agregado un domicilio exitosamente. ¿Quieres agregar otro domicilio?';
        return back()->with(compact('mensaje'));
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $domicilio = Domicilio::find($id);
        return view('director.domicilio.domicilio_edit')->with(compact('domicilio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $rules = [
            'estado' => 'required',
            'municipio' => 'required',
            'localidad' => 'required',
            'calle' => 'required',
            'cp' => 'required',
            'colonia' => 'required',
            'no_interior' => 'required',
            'no_exterior' => 'required',
        ];

        $message = [
            'estado.required' => 'Debes de agregar el estado donde pertenece',
            'municipio.required' => 'Debes de agregar el municipio donde pertenece ',
            'localidad.required' => 'Debes de agregar la localidad donde pertenece',
            'calle.required' => 'Debes de agregar  la calle donde pertenece',
            'cp.required' => 'Debes de agregar  el codigo postal donde pertenece',
            'colonia.required' => 'Debes de agregar la colonia donde pertenece',
            'no_interior.required' => 'Debes de agregar el No interior si tiene',
            'no_exterior.required' => 'Debes de agregar el No exterior si tiene',
        ]; 

        $this->validate($request , $rules , $message);

        $domicilio = Domicilio::find($id);

        $domicilio->estado = $request->input('estado');
        $domicilio->municipio = $request->input('municipio');
        $domicilio->localidad = $request->input('localidad');
        $domicilio->calle = $request->input('calle');
        $domicilio->cp = $request->input('cp');
        $domicilio->colonia = $request->input('colonia');
        $domicilio->no_interior = $request->input('no_interior');
        $domicilio->no_exterior = $request->input('no_exterior');
        $domicilio->save();
        $mensaje = 'Se ha actualizado el domicilio existente de manera  exitosa.';
        return redirect('director/domicilios/index')->with(compact('mensaje'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $domicilio = Domicilio::find($id);

        $domicilio->delete();

        $eliminado = 'Se ha eliminado el domicilio exitosamente';
        return back()->with(compact('eliminado'));
    }


}
