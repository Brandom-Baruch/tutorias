@extends('layouts.app')

@section('titulo','Listado de reporte grupal')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

@section('opciones_director')
@if(Auth::user()->materias()->where('name','like','%tutorias%')->get() && 
Auth::user()->puestos->where('puesto','Tutor')->first())
  @include('includes.links_tutor')
@endif
<a  class="dropdown-item" href="{{url('docente')}}">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile">          
            <div class="name">              
            </div>
          </div>
        </div>
      </div>
      <div class="description text-center">
        <h3 class="title">Reporte Grupal
        <h4 class="text-dark">Solamente realiza esta acción cuando se finalice el semestre</h4> 
        </h3>
      </div>        
      <div class="text-center">
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
        @if(Auth::user()->reporte_tutoria_grupal && Auth::user()->reporte_tutoria_grupal->indice_reprobacion &&
            Auth::user()->reporte_tutoria_grupal->indice_regularizacion && Auth::user()->reporte_tutoria_grupal->alumno_cerfiticacion)
        <button class="btn btn-info" style="margin-bottom: 30px;" disable="true">
          Finalizo Reporte
        </button>
        <a href="{{url('/docente/reporte_grupal/pdf')}}" class="btn btn-success" style="margin-bottom: 30px;">
            Descargar pdf
        </a>
        @else  
        <a href="{{url('/docente/tutorias/reporte_grupal/create')}}" class="btn btn-primary" style="margin-bottom: 30px;">
        	Agregar reporte
    	  </a>
        @endif 
        @if(empty(Auth::user()->reporte_tutoria_grupal))   
        @else  	
          <div class="row">          
            <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Lista de tutorados</th>
                  <th class="text-center">No. Bajas</th>                
                  <th class="text-center">No. Altas</th>
                  <th class="text-center">Opciones</th>
                </tr>
              </thead>
            
              <tbody>
                <tr>
                  <td class="text-center">{{ Auth::user()->reporte_tutoria_grupal->id }}</td>
                  <td class="text-center">{{ $grupo->alumnos()->count() }}</td>
                  <td class="text-center">{{ $reporte->bajas }}</td>                                
                  <td class="text-center">{{ $reporte->altas }}</td>
                  <td class="td-actions text-center">
                      <form method="post" action="{{url('docente/tutorias/reporte_grupal/'.$reporte->id.'/delete')}}">
                        {{csrf_field()}}                   
                        <a href="{{url('docente/tutorias/reporte_grupal/'.$reporte->id.'/edit')}}" rel="tooltip" title="Editar Reporte" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                        <i class="material-icons">border_color</i>
                        </a>
                        <button  type="submit" rel="tooltip" title="Eliminar Reporte" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                          <i class="fa fa-times"></i>
                        </button>
                      </form>                
                  </td>
                </tr>                 
              </tbody>
            
            </table>                       
          </div>
        @endif                                                                            
      </div>                       
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
