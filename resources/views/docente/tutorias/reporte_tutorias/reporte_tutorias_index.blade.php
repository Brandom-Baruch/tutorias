@extends('layouts.app')

@section('titulo','Reporte de Tutoría y Orientación Escolar')

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
        <h3 class="title">Reporte de Tutoría y Orientación Escolar 
        	<b class="text-primary">{{$materia_grupo->name}} {{$materia_grupo->grado}} {{$materia_grupo->grupo}} </b>
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
        <a href="{{url('/docente/tutorias/reporte_tutorias/create')}}" class="btn btn-primary" style="margin-bottom: 30px;">
        	Agregar reporte
    	</a>
        <div class="row">          
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th>Ciclo escolar</th>
                <th>Fecha</th>                
                <th class="text-center">Motivos de bajas de alumnos</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
          @foreach($reportes as $reporte) 
            <tbody>
              <tr>
                <td class="text-center">{{$reporte->id}}</td>
                <td>{{$reporte->ciclo_escolar}}</td>
                <td>{{$reporte->fecha}}</td>                                
                <td class="text-center">{{$reporte->principales_motivos_baja}}</td>
                <td class="td-actions text-center">
                    <form method="post" action="{{url('docente/tutorias/'.$reporte->id.'/reporte_tutorias/delete')}}">
                      {{csrf_field()}}
                      <a href="{{url('docente/tutorias/'.$reporte->id.'/reporte_tutorias/edit')}}" rel="tooltip" title="Editar Reporte" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                      <i class="material-icons">border_color</i>
                      </a>
                      <a href="{{url('docente/tutorias/'.$reporte->id.'/reporte_tutorias_pdf')}}" rel="tooltip" title="Descargar PDF" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                      <i class="material-icons">description</i>
                      </a>
                      <button  type="submit" rel="tooltip" title="Eliminar Reporte" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
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
