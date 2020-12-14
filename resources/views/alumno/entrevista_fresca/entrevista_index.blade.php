@extends('layouts.app')

@section('titulo','Entrevista Fresca')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
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
        <div style="margin-top: 20px;">                  
          @if(!empty(Auth::user()->entrevista_fresca->datoFamiliar && Auth::user()->entrevista_fresca->datoAcademico && 
            Auth::user()->entrevista_fresca->habitoEstudio &&  Auth::user()->entrevista_fresca->otraActividad &&  
            Auth::user()->entrevista_fresca->datosAdicionales))
            <form method="post" action="{{url('alumno/finalizar/entrevista')}}">        
              {{csrf_field()}}
              <button  type="submit" class="btn btn-success">Finalizar Encuesta</button>
              <a href="{{url('/alumno/encuestas')}}" class="btn btn-danger">Regresar</a>
            </form>        
            @else
            <ol start="1">
              @if(!empty(Auth::user()->entrevista_fresca->datoFamiliar))
              <li><a disabled="true">Encuesta sobre Datos Familiares</a></li>
              @else
              <li><a href="{{url('/alumno/entrevista/datos/familiares')}}">Datos Familiares</a></li>
              @endif
              @if(!empty(Auth::user()->entrevista_fresca->datoAcademico))
              <li><a disabled="true">Encuesta sobre Datos Academicos</a></li>
              @else
              <li><a href="{{url('alumno/entrevista/datos/academicos')}}">Datos Academicos</a></li>
              @endif
              @if(!empty(Auth::user()->entrevista_fresca->habitoEstudio))
              <li><a a disabled="true">Habitos de Estudio</a></li>
              @else
              <li><a href="{{url('alumno/entrevista/habitos/estudio')}}">Habitos de Estudio</a></li>
              @endif
              @if(!empty(Auth::user()->entrevista_fresca->otraActividad))
              <li><a a disabled="true">Otras Actividades</a></li>
              @else
              <li><a href="{{url('alumno/entrevista/otras/actividades')}}">Otras Actividades</a></li>
              @endif
              @if(!empty(Auth::user()->entrevista_fresca->datosAdicionales))
              <li><a a disabled="true">Datos Adicionales</a></li>
              @else
              <li><a href="{{url('alumno/entrevista/datos/adicionales')}}">Datos Adicionales</a></li>
              @endif                                  
              <a href="{{url('/alumno/encuestas')}}" style="margin-top: 10px;" class="btn btn-danger">Regresar</a>
            </ol>    
            @endif                  
          </div>
        </div>                            
      </div>
    </div>
  </div>
  @include('includes.footer')
  @endsection
