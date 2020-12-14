@extends('layouts.app')

@section('titulo','Listado de grupos')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

@include('includes.links_director')
<a href="{{url('docente')}}">Panel de control</a>
@if(Auth::user()->puestos()->where('puesto','Tutor')->first() && Auth::user()->materias()->where('name','like','Tutorias%')->first())
<a href="{{url('docente/tutorias')}}">Tutorias</a>
@endif
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} ');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile">          
            <div class="name">
              <h3 class="title" style="color: white;">Bienvenido Director {{Auth::user()->name}}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="description text-center">
        <h3 class="title">Listado de Grupos</h3>                                                                                    
      </div>                            
      <div class="text-center">           
       @if (session('mensaje')) <!--Si existe un de la variable eliminado, mostrara el contenido del de la variable eliminado-->
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
      @if (session('eliminado')) <!--Si existe un de la variable eliminado, mostrara el contenido del de la variable eliminado-->
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
      <a href="{{url('/director/grupos/create')}}" class="btn btn-primary">Agregar nuevo Grupo</a>
      <div class="team">
       <div class="row">
        @foreach($grupos as $grupo)
        <div class="col-md-4">
         <div class="team-player">
           <div class="card card-plain">
             <div class="col-md-6 ml-auto mr-auto">
               <img src="{{asset('img/grupo.jpg')}}"  class="img-raised rounded-circle img-fluid">
             </div>
             <h4 class="card-title">Nombre: {{$grupo->name}}
               <br>
               <small class="card-description text-dark p-2">Grado: {{$grupo->grado}}</small>
               <small class="card-description text-dark">Grupo: {{$grupo->grupo}}</small>
               <br>
               <small class="card-description text-dark ">Semestre: {{$grupo->semestre}}</small>
               <br>
               <small class="card-description text-dark">Año: {{$grupo->year}}</small>
             </h4>             
             <div class="card-footer justify-content-center">	                	                	
              <div>
               <form method="post" action="{{url('/director/grupo/'.$grupo->id.'/delete')}}">
                {{csrf_field()}}
                <a  href="{{url('director/grupo/'.$grupo->id.'/alumnos/show')}}" rel="tooltip" title=" Ver Grupo" 
                  class="btn btn-warning btn-fab btn-fab-mini btn-rect btn-sm">
                  <span class="material-icons">
                    remove_red_eye
                  </span>
                </a>                                                 
                <a href="{{url('/director/grupo/'.$grupo->id.'/edit')}}" rel="tooltip" title="Editar Grupo" 
                  class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                  <i class="fa fa-edit"></i>
                </a>                         
                <button type="submit" rel="tooltip" title="Eliminar Grupo" 
                class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                <i class="fa fa-times"></i>
              </button>
            </form>	                		                		                             		
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach        
</div>
<div class="d-flex">
  <div class="mx-auto">
    {{$grupos->links("pagination::bootstrap-4")}}
  </div>
</div>          
</div>
</div>                       
</div>
</div>
</div>
@include('includes.footer')
@endsection
