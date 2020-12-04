@extends('layouts.app')

@section('titulo','Habitos de estudio')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno/encuestas')}}" class="dropdown-item">Panel de entrevistas</a>
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">      
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile" style="margin: 20px;">                                                     
          </div>
        </div>        
      </div>
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
      <div class="row "> 
        @if(!empty(Auth::user()->test->test_habito_estudio->organizacion_tiempo &&  Auth::user()->test->test_habito_estudio->planificacion && Auth::user()->test->test_habito_estudio->estrategias_aprendizaje))
          <div class="col-12 text-center">
            <form method="post" action="{{url('alumno/test/finalizar/habitos_estudio')}}">
              {{csrf_field()}}
              <button class="btn btn-success" style="margin-bottom: 1px;">Finalizar Habitos de estudio</button>
              <a href="{{url('/alumno/test')}}" style="margin-top: 10px;" class="btn btn-danger">Regresar</a>
            </form>            
          </div>
        @else     
        <div style="margin-top: 20px;" class="col-12">                                                    
            <ol start="1">
              @if(!empty(Auth::user()->test->test_habito_estudio->organizacion_tiempo))                                         
              <li><button class="btn btn-success btn-sm">Organización de tiempo</button></li>
              @else
              <li><a href="{{url('alumno/test/habitos_estudio/organizacion_tiempo')}}">Organización de tiempo</a></li>
              @endif
              @if(!empty(Auth::user()->test->test_habito_estudio->planificacion))
              <li><button class="btn btn-success btn-sm">Planificación</button></li>
              @else              
              <li><a href="{{url('alumno/test/habitos_estudio/planificacion')}}">Planificación</a></li>
              @endif
              @if(!empty(Auth::user()->test->test_habito_estudio->estrategias_aprendizaje))
              <li><button class="btn btn-success btn-sm">Estrategias de aprendizaje</button></li>
              @else
              <li><a href="{{url('alumno/test/habitos_estudio/estrategia_aprendizaje')}}">Estrategias de aprendizaje</a></li>
              @endif
            </ol>                            
            <a href="{{url('/alumno/test')}}" style="margin-top: 10px;" class="btn btn-danger">Regresar</a>          
          </div>
        </div>                            
        @endif
      </div>
    </div>
  </div>
  @include('includes.footer')
  @endsection
