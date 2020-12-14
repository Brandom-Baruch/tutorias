@extends('layouts.app')

@section('titulo','Agregar Domicilio')
@section('body-class','profile-page sidebar-collapse')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 200px;"></div>
<div class="main main-raised">
    <div class="container">             
        <div class="section">
            <h2 class="title text-center" style="color:black;">Registrar nuevo Domicilio</h2>
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
            <form method="post" action="{{url('director/domicilio/create')}}">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Estado</label>
                  <input type="text" class="form-control" placeholder="Ejemplo: Puebla" name="estado" 
                         value="{{old('estado')}}">
                </div>
                <div class="form-group col-md-4">
                  <label>Municipio</label>
                  <input type="text" class="form-control" placeholder="Ejemplo: Santa Ana Nopalucan" name="municipio"
                         value="{{old('municipio')}}">
                </div>
                <div class="form-group col-md-4">
                  <label>Localidad</label>
                  <input type="text" class="form-control"  placeholder="1234 Main St" name="localidad" 
                         value="{{old('localidad')}}">
                </div>
                <div class="form-group col-md-3">
                  <label>Calle</label>
                  <input type="text" class="form-control"  placeholder="Apartment, studio, or floor" name="calle"
                         value="{{old('calle')}}">
                </div>
                <div class="form-group col-md-3">
                  <label>Colonia</label>
                  <input type="text" class="form-control"  placeholder="Apartment, studio, or floor" name="colonia"
                         value="{{old('colonia')}}">
                </div>
                <div class="form-group col-md-2">
                  <label>No Interior</label>
                  <input type="number" class="form-control" placeholder="11"  name="no_interior"
                         value="{{old('no_interior')}}">
                </div>
                <div class="form-group col-md-2">
                  <label>No Exterior</label>
                  <input type="number" class="form-control" placeholder="11"  name="no_exterior"
                         value="{{old('no_exterior')}}">
                </div>
                <div class="form-group col-md-2">
                  <label>Codigo Postal</label>
                  <input type="number" class="form-control" placeholder="90135"  name="cp"
                         value="{{old('cp')}}">
                </div>
              </div>              
              <button type="submit" class="btn btn-success">Agregar Domicilio</button>
              <a href="{{url('director/domicilios/index')}}" class="btn btn-danger">Cancelar</a>
            </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
