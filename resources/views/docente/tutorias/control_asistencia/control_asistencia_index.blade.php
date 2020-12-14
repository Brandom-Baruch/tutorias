@extends('layouts.app')

@section('titulo','Control de asistencia')

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
        <a href="{{url('/docente/tutorias/asistencia/create')}}" class="btn btn-primary">
        	Agregar asistencia
    	  </a>
        <a href="{{url('docente/control_asistencias/pdf')}}" class="btn btn-success">Descargar PDF</a>
        <br><br>
        <div class="row">          
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
            <thead>
              <tr>               
                <th>Alumno</th>                                
                <!--<th class="text-center">Grupo</th>-->
                <th class="text-center">Caso o situación atendida</th>
                <th class="text-center">Indicaciones posteriores</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
          @foreach($asistencias as $numero => $asistencia)
              <tbody>
                <tr>
                  <td>{{$asistencia->alumnos[0]->name}}</td>
                  <!--<td>                   
                  </td>-->                                                                
                  <td class="text-center">{{$asistencia->caso_situacion_atendida}}</td>
                  <td class="text-center">{{$asistencia->indicaciones_posteriores}}</td>                
                  <td class="td-actions text-center">
                      <form method="post" action="{{url('docente/tutorias/'.$asistencia->id.'/asistencia/delete')}}">
                        {{csrf_field()}}
                        <a href="{{url('docente/tutorias/'.$asistencia->id.'/asistencia/edit')}}" rel="tooltip" title="Editar Asistencia" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                        <i class="material-icons">border_color</i>
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
