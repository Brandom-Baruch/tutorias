@extends('layouts.app')

@section('titulo','Panel del tutor')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')

@if(Auth::user()->puestos->where('puesto','Director')->first())
@include('includes.links_director')
@endif
@if(Auth::user()->materias()->where('name','like','%tutorias%')->get() && 
Auth::user()->puestos->where('puesto','Tutor')->first())
<a href="{{url('docente/tutorias')}}">Tutorias</a>
@endif
<a href="{{url('docente')}}">Panel de control</a>
@endsection

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">    
      <div class="row">                       
        <div class="col-md-12 text-center">
          <h3>
            Alumnos del grupo <b class="text-primary">{{$materia_grupo->name}} {{$materia_grupo->grado}} {{$materia_grupo->grupo}}</b>
          </h3>
        </div>         
        <div class="col-md-6">         
          <h3>{{$entrevista_alumno->count()}} Alumno(s) han finalizado  la encuesta</h3>
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
            <thead>
              <tr>              
                <th class="text-center">Nia</th>
                <th class="text-center">Alumno</th>              
                <th class="text-center">Fecha de Aplicación</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($entrevista_alumno as  $entrevista)                     
              <tr>              
                <td class="text-center">{{$entrevista->alumno_id}}</td>            
                <td class="text-center">{{$entrevista->alumnos[0]->name}}</td>                  
                <td class="text-center">{{$entrevista->fecha_aplicacion}}</td>
                <td class="td-actions text-center">                              
                  <a href="{{url('docente/entrevista/alumno/'.$entrevista->alumno_id.'/view')}}" rel="tooltip" title="Ver resultados" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                    <i class="material-icons">check</i>
                  </a>                              
                </td>
              </tr>                               
              @endforeach
            </tbody>
          </table> 
        </div> 
        <div class=" col-md-6">
          <h3>{{$entrevista_no->count()}} Alumno(s) que han Iniciado la encuesta</h3>
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
            <thead>
              <tr>              
                <th class="text-center">Nia</th>
                <th class="text-center">Alumno</th>                               
                <th class="text-center">Descripción</th>              
              </tr>
            </thead>                    
            <tbody>
              <tr>
                @foreach($entrevista_no as $entrevista_no)
                @foreach($entrevista_no->alumnos as $alumno)
                <td class="text-center">{{$alumno->nia}}</td>
                <td class="text-center">{{$alumno->name}}</td>            
                <td class="text-center">{{$entrevista_no->descripcion}}</td>                                              
              </tr>
              @endforeach
              @endforeach               
            </tbody>                    
          </table> 
        </div>                                 
        <div class="col-md-6">
          <h3>{{$entrevista_padre->count()}} Padre(s) que han finalizado  la encuesta</h3>
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
            <thead>
              <tr>              
                <th class="text-center">Nia</th>
                <th class="text-center">Padre</th>
                <th class="text-center">Fecha de Aplicación</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($entrevista_padre as  $entrevista)                            
              <tr>              
                <td class="text-center">{{$entrevista->alumno_id}}</td>
                <td class="text-center">{{$entrevista->padres[0]->name}}</td>
                <td class="text-center">{{$entrevista->fecha_aplicacion}}</td>
                <td class="td-actions text-center">                              
                  <a href="{{url('docente/entrevista/padre_familia/alumno/'.$entrevista->alumno_id.'/view')}}" rel="tooltip" title="Ver resultados" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                    <i class="material-icons">check</i>
                  </a>                              
                </td>
              </tr>                               
              @endforeach
            </tbody>
          </table> 
        </div> 
        <div class="col-md-6">
          <h3>{{$entrevistaPadre_No->count()}} Padre(s) que han Iniciado  la encuesta</h3>
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
            <thead>
              <tr>              
                <th class="text-center">Nia</th>
                <th class="text-center">Padre</th>
                <th class="text-center">Fecha de Aplicación</th>                
              </tr>
            </thead>
            <tbody>
              @foreach($entrevistaPadre_No as  $entrevista)                            
              <tr>              
                <td class="text-center">{{$entrevista->alumno_id}}</td>
                <td class="text-center">{{$entrevista->padres[0]->name}}</td>
                <td class="text-center">{{$entrevista->descripcion}}</td>               
              </tr>                               
              @endforeach
            </tbody>
          </table> 
        </div>                
      </div>                                  
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
