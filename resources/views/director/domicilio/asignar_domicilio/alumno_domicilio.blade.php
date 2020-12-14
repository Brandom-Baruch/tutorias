@extends('layouts.app')

@section('titulo','Asignar domicilio')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} ');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">     
      <div class="description text-center p-2">
        <h3 class="title">Asignar domicilio para el alumno <b class="text-primary">{{$alumno->name}}</b></h3>
      </div>        
      <div class="tab-pane  text-center">
       @if (session('mensaje'))    
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
        @if (session('eliminado'))          
            <div class="alert alert-danger text-left">
                <div class="container-fluid">
                  <div class="alert-icon">
                    <i class="material-icons">check</i>
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                  </button>
                  {{ session('eliminado') }}
                </div>
            </div>
        @endif          
        <a href="{{url('director/alumno/'.$alumno->nia.'/show')}}" class="btn btn-danger" style="margin-bottom: 10px;">Regresar</a>
        <div class="row">                  
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
              <thead>
                  <tr>                  	  
                      <th class="text-center">Codigo Postal</th>
                      <th>Estado</th>
                      <th>Municipio</th>
                      <th>Calle</th>                      
                      <th class="text-center">Colonia</th>
                      <th class="text-center">Localidad</th>
                      <th class="text-center">No Exterior</th>
                      <th class="text-center">No Interior</th>
                      <th class="text-center">Opciones</th>
                  </tr>
              </thead>
              @foreach($domicilios as  $domicilio)
              <tbody>
                  <tr>                  	  
                      <td class="text-center">{{$domicilio->cp}}</td>
                      <td>{{$domicilio->estado}}</td>
                      <td>{{$domicilio->municipio}}</td>
                      <td>{{$domicilio->calle}}</td>                  
                      <td class="text-center">{{$domicilio->colonia}}</td>
                      <td class="text-center">{{$domicilio->localidad}}</td>
                      <td class="text-center">{{$domicilio->no_exterior}}</td>
                      <td class="text-center">{{$domicilio->no_interior}}</td>
                      <td class="td-actions">
                          <form method="post" action="{{url('/director/alumno/'.$alumno->nia.'/domicilio')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="alumno_id" value="{{$alumno->nia}}">
                            <input type="hidden" name="domicilio_id" value="{{$domicilio->id}}">
                            <button type="submit" rel="tooltip" title="Agregar domicilio" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                                <i class="material-icons">check</i>
                            </button>                           
                          </form>
                      </td>
                  </tr>                 
              </tbody>
              @endforeach
          </table>                                 
        </div>                                                                        
      </div>                       
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
