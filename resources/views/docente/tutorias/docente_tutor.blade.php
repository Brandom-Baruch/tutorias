@extends('layouts.app')

@section('titulo','Panel del tutor')

@section('body-class','profile-page sidebar-collapse')

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
        <div class="col-12 col-md-12  col-sm-12 ml-auto mr-auto">
          <div class="profile-tabs">              
            <div class="col-md-12 text-center">
              <h3>
                  Alumnos del grupo 
                  <b class="text-primary">{{$materia_grupo->name}} {{$materia_grupo->grado}} {{$materia_grupo->grupo}}
                  </b>
              </h3>
            </div>
            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#entrevista_fresca" role="tab" data-toggle="tab">
                  <i class="material-icons">book</i> Entrevista Fresca
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#cuestionario_anexos" role="tab" data-toggle="tab">
                  <i class="material-icons">book</i> Cuestionario Anexos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#test_estilo_aprendizaje" role="tab" data-toggle="tab">
                  <i class="material-icons">book</i> Test sobre estilos <br>de aprendizaje
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#test_atencion_individual" role="tab" data-toggle="tab">
                  <i class="material-icons">book</i> Test para detectar tutorados <br>que requieran atención individual
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active text-center gallery" id="entrevista_fresca">            
          <div class="table-responsive">
            <h3 class="text-left">Entrevista Fresca</h3>
            <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                  <tr>              
                    <th class="text-center">Nia</th>
                    <th class="text-center">Alumno</th>              
                    <th class="text-center">Estado</th>
                    <th class="text-center">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($grupo_alumno as  $alumno)                                
                      <tr>              
                        <td class="text-center">{{$alumno->nia}}</td>
                        <td class="text-center">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</td>            
                        <td class="text-center">{{$alumno->entrevista_fresca['descripcion']}}</td>                                      
                        <td class="td-actions text-center">
                          @if($alumno->entrevista_fresca['descripcion'] == 'Finalizo la entrevista')
                          <a href="{{url('docente/entrevista/alumno/'.$alumno->nia.'/view')}}" rel="tooltip" title="Ver resultados" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                            <i class="material-icons">check</i>                        
                          </a>                                                    
                          @elseif($alumno->entrevista_fresca['descripcion'] == 'Inicio la entrevista')                             
                           <p>No ha finalizado la entrevista</p>
                          @else
                          <p class="text-danger">No ha iniciado la entrevista</p>
                          @endif
                        </td>
                      </tr>                
                  @endforeach
                </tbody>                
            </table>
          </div>            
        </div>
        <div class="tab-pane text-center gallery" id="cuestionario_anexos">
          <div class="table-responsive">
            <h3 class="text-left">Cuestionario de anexos</h3>
            <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
              <thead>
                <tr>              
                  <th class="text-center">Nia</th>
                  <th class="text-center">Alumno</th>              
                  <th class="text-center">Estado</th>
                  <th class="text-center">Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($grupo_alumno as  $alumno)                                
                    <tr>              
                      <td class="text-center">{{$alumno->nia}}</td>
                      <td class="text-center">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</td>            
                      <td class="text-center">{{$alumno->cuestionario_anexo['descripcion']}}</td>                                  
                      <td class="td-actions text-center">
                        @if($alumno->cuestionario_anexo['descripcion'] == 'Finalizo cuestionario')
                        <a href="{{url('#')}}" rel="tooltip" title="Ver resultados" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                          <i class="material-icons">check</i>                        
                        </a>                                                    
                        @elseif($alumno->cuestionario_anexo['descripcion'] == 'Inicio cuestionario')                             
                         <p>No ha finalizado el cuestionario</p>
                        @else
                        <p class="text-danger">No ha iniciado la entrevista</p>
                        @endif
                      </td>
                    </tr>                
               @endforeach
              </tbody>
            </table>                             
          </div>
        </div>
        <div class="tab-pane text-center gallery" id="test_estilo_aprendizaje">
          <div class="table-responsive">
            <h3 class="text-left">Test sobre estilos de aprendizaje</h3>              
            <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
              <thead>
                <tr>              
                  <th class="text-center">Nia</th>
                  <th class="text-center">Alumno</th>              
                  <th class="text-center">Estado</th>
                  <th class="text-center">Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($grupo_alumno as  $alumno)                                
                    <tr>              
                      <td class="text-center">{{$alumno->nia}}</td>
                      <td class="text-center">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</td>            
                      <td class="text-center">{{$alumno->test['descripcion']}}</td>                                     
                      <td class="td-actions text-center">
                        @if($alumno->test['descripcion'] == 'Finalizo Test')
                        <a href="{{url('#')}}" rel="tooltip" title="Ver resultados" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                          <i class="material-icons">check</i>                        
                        </a>                                                    
                        @elseif($alumno->test['descripcion'] == 'Inicio Test')                             
                         <p>No ha finalizado el cuestionario</p>
                        @else
                        <p class="text-danger">No ha iniciado la entrevista</p>
                        @endif
                      </td>
                    </tr>                
               @endforeach
              </tbody>
            </table> 
          </div>
        </div>
        <div class="tab-pane text-center gallery" id="test_atencion_individual">
          <div class="table-responsive">
            <h3 class="text-left">Test para detectar tutorados que requieran atención individual</h3>              
            <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
              <thead>
                <tr>              
                  <th class="text-center">Nia</th>
                  <th class="text-center">Alumno</th>              
                  <th class="text-center">Estado</th>
                  <th class="text-center">Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($grupo_alumno as  $alumno)                                
                    <tr>              
                      <td class="text-center">{{$alumno->nia}}</td>
                      <td class="text-center">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</td>            
                      <td class="text-center">{{$alumno->atencion_individual['descripcion']}}</td>                                 
                      <td class="td-actions text-center">
                        @if($alumno->atencion_individual['descripcion'] == 'Finalizo Test')
                        <a href="{{url('#')}}" rel="tooltip" title="Ver resultados" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                          <i class="material-icons">check</i>                        
                        </a>                                                    
                        @else                           
                         <p>No ha finalizado el cuestionario</p>                       
                        @endif
                      </td>
                    </tr>                
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
