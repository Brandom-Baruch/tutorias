@extends('layouts.app')

@section('titulo','Seguimiento de alumnos en riesgo')

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
        <h3 class="title">Seguimiento de alumnos en riesgo</h3>
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
        <a href="{{url('/docente/tutorias/seguimientos_alumno_riesgo/create')}}" class="btn btn-primary mb-3">
        	Agregar registro
    	</a>
        <div class="row">
        <div class="table-responsive">                        
          <table class="table">
            <thead>               
                <th class="text-center">Matricula</th>                
                <th>Nombre del alumno</th>                                
                <th class="text-center">Semestre que cursa</th>
                <th class="text-center">Promedio acumulado</th>
                <th class="text-center">Promedio del ciclo actual</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
          
            <tbody>
              @foreach($seguimientos as $seguimiento)
                  @foreach($seguimiento->alumnos as $alumno)
                  <tr>
                      <td>{{ $seguimiento->alumno_id }}</td>
                      <td>{{ $alumno->name }}</td>                                                                
                      <td class="text-center">{{ $alumno->grupo->semestre }}</td>
                      <td class="text-center">{{ $seguimiento->promedio_acumulado }}</td>
                      <td class="text-center">{{ $seguimiento->promedio_acumulado_ciclo_actual }}</td>
                      <td class="td-actions text-center">
                          <form method="post" 
                                action="{{url('docente/tutorias/seguimientos_alumno_riesgo/'.$seguimiento->id.'/delete')}}">
                            {{csrf_field()}}
                            <a href="{{url('docente/tutorias/seguimientos_alumno_riesgo/'.$seguimiento->id.'/edit')}}" rel="tooltip" 
                               title="Editar Seguimiento" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                               <i class="material-icons">border_color</i>
                            </a>
                            <a href="{{url('docente/seguimiento_alumno/'.$seguimiento->id.'/pdf')}}" rel="tooltip" title="Descargar PDF" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                            <i class="material-icons">description</i>
                            </a>
                            <button  type="submit" rel="tooltip" title="Eliminar Seguimiento" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-times"></i>
                            </button>
                          </form>                
                      </td>
                  </tr>     
              @endforeach
            @endforeach            
            </tbody>
          </table>
        </div>                       
        </div>                                                                            
      </div>                       
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
