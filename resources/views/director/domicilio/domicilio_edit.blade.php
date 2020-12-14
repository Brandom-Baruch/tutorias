@extends('layouts.app')

@section('titulo','Editar Domicilio')
@section('body-class','profile-page sidebar-collapse')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 200px;"></div>
<div class="main main-raised">
    <div class="container">             
        <div class="section">
            <h2 class="title text-center" style="color:black;">Editar Domicilio</h2>
            @if($errors->any())
                <div class="alert alert-danger">
                    <div class="container-fluid">                     
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                      </button>
                      <ul>    
                          @foreach($errors->all() as $error)                        
                          <li>{{$error}}</li>
                          @endforeach
                      </ul>
                    </div>
                </div>
            @endif 
            @if (session('mensaje')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
              <div class="alert alert-success text-left">
                  <div class="container-fluid">
                    <div class="alert-icon">
                      <i class="material-icons">check</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    {{ session('mensaje') }}
                  </div>
              </div>
            @endif        
            <form method="post" action="{{url('director/domicilio/'.$domicilio->id.'/edit')}}">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Estado</label>
                  <input type="text" class="form-control"  name="estado" 
                         value="{{old('estado',$domicilio->estado)}}">
                </div>
                <div class="form-group col-md-4">
                  <label>Municipio</label>
                  <input type="text" class="form-control"  name="municipio"
                         value="{{old('municipio',$domicilio->municipio)}}">
                </div>
                <div class="form-group col-md-4">
                  <label>Localidad</label>
                  <input type="text" class="form-control"  name="localidad" 
                         value="{{old('localidad', $domicilio->localidad)}}">
                </div>
                <div class="form-group col-md-3">
                  <label>Calle</label>
                  <input type="text" class="form-control"   name="calle"
                         value="{{old('calle' , $domicilio->calle)}}">
                </div>
                <div class="form-group col-md-3">
                  <label>Colonia</label>
                  <input type="text" class="form-control"   name="colonia"
                         value="{{old('colonia', $domicilio->colonia)}}">
                </div>
                <div class="form-group col-md-2">
                  <label>No Interior</label>
                  <input type="number" class="form-control"   name="no_interior"
                         value="{{old('no_interior', $domicilio->no_interior)}}">
                </div>
                <div class="form-group col-md-2">
                  <label>No Exterior</label>
                  <input type="number" class="form-control"   name="no_exterior"
                         value="{{old('no_exterior', $domicilio->no_exterior)}}">
                </div>
                <div class="form-group col-md-2">
                  <label>Codigo Postal</label>
                  <input type="number" class="form-control"   name="cp"
                         value="{{old('cp', $domicilio->cp)}}">
                </div>
              </div>              
              <button type="submit" class="btn btn-success">Actualizar Domicilio</button>
              <a href="{{url('director/domicilios/index')}}" class="btn btn-danger">Cancelar</a>
            </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
