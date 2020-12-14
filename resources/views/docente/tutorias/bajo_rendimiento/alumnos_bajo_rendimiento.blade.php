@extends('layouts.app')

@section('titulo','Listado de alumnos de bajo rendimiento')

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
        <h3 class="title">Reporte de alumnos de bajo rendimiento
        	del grupo <b class="text-primary">{{$materia_grupo->name}} {{$materia_grupo->semestre}} {{$materia_grupo->grupo}}</b>
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
        <a href="{{url('/docente/tutorias/alumnos_bajo_rendimiento/create')}}" class="btn btn-primary" style="margin-bottom: 30px;">Agregar reporte</a>
        <div class="row">          
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th>Nombre de la materia</th>
                <th>Nombre del docente</th>                
                <th class="text-center">Total de alumnos</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
            @foreach($reporte as $reporte)  
            <tbody>
              <tr>
                <td class="text-center">{{$reporte->id}}</td>
                <td>{{$reporte->materia_name}}</td>
                <td>{{$reporte['docente_name']}}</td>                                
                <td class="text-center">{{$reporte['total_alumnos']}}</td>
                <td class="td-actions text-center">
                    <form method="post" action="{{url('docente/tutorias/alumnos_bajo_rendimiento/'.$reporte->id.'/delete')}}">
                      {{csrf_field()}}
                      <a href="{{url('docente/tutorias/'.$reporte->id.'/alumnos_reprobados/create')}}" rel="tooltip" title="Agregar Alumnos Reprobados" class="btn btn-warning btn-fab btn-fab-mini btn-rect btn-sm">
                      <i class="fa fa-user"></i>
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
