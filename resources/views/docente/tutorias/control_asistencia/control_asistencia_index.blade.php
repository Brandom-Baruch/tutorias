@extends('layouts.app')

@section('titulo','Control de asistencia')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

@section('opciones_director')
@if(Auth::user()->puestos->where('puesto','Director')->first())
@include('includes.links_director')
@endif
@if(Auth::user()->materias()->where('name','like','%tutorias%')->get() && 
Auth::user()->puestos->where('puesto','Tutor')->first())
<a  class="dropdown-item" href="{{url('docente/tutorias')}}">Tutorias</a>
<a  class="dropdown-item" href="{{url('docente/tutorias/alumnos_bajo_rendimiento')}}">Alumnos de bajo <br>rendimiento</a>
<a  class="dropdown-item" href="{{url('docente/tutorias/asistencia')}}">Control de asistencia <br>de tutores</a>
<a  class="dropdown-item" href="{{url('docente/tutorias/reporte_tutorias')}}">Reporte de tutorias</a>
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
        <h3 class="title">Control de asistencia de tutores</h3>
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
        <a href="{{url('/docente/tutorias/asistencia/create')}}" class="btn btn-primary" style="margin-bottom: 30px;">
        	Agregar asistencia
    	</a>
        <div class="row">          
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
            <thead>
              <tr>
                <th class="text-center">#</th>                
                <th>Nombre del alumno</th>                                
                <th class="text-center">Solución</th>                
                <th class="text-center">Caso o situación atendida</th>
                <th class="text-center">Indicaciones posteriores</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
          @foreach($asistencias as $numero =>$asistencia)
            <tbody>
              <tr>
                <td class="text-center">{{($numero+1)}}</td>
                <td>{{$asistencia->alumno_name}}</td>
                <td>{{$asistencia->solucion}}</td>                                                                
                <td class="text-center">{{$asistencia->caso_situacion_atendida}}</td>
                <td class="text-center">{{$asistencia->indicaciones_posteriores}}</td>                
                <td class="td-actions text-center">
                    <form method="post" action="{{url('docente/tutorias/'.$asistencia->id.'/asistencia/delete')}}">
                      {{csrf_field()}}
                      <a href="{{url('docente/tutorias/'.$asistencia->id.'/asistencia/edit')}}" rel="tooltip" title="Editar Asistencia" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                      <i class="material-icons">border_color</i>
                      </a>
                      <a href="{{url('#')}}" rel="tooltip" title="Descargar PDF" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                      <i class="material-icons">description</i>
                      </a>
                      <button  type="submit" rel="tooltip" title="Eliminar Asistencia" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                        <i class="fa fa-times"></i>
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
