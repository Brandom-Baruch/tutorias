@extends('layouts.app')

@section('titulo','Agregar materia')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

@include('includes.links_director')

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

            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <h3 class="title">Agregar tutorias para el grupo <b class="text-primary">{{$grupo->name}}</b></h3>
        <h4 class="text-dark">Grado:{{$grupo->grado}} y Grupo:{{$grupo->grupo}}</h4>       
        @if($tutorias)
          <h4>Este grupo ya tiene asignada la materia de <b>{{$tutorias->name}}</b></h4>
        @else
          <h4>Este grupo no tiene asignada la materia de tutoria</h4>
        @endif  
      </div>        
      <div class="tab-pane  text-center">
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
      <a href="{{url('director/grupo/'.$grupo->id.'/materias/show')}}" 
       class="btn btn-danger" 
       style="margin-bottom: 10px;">
       Regresar
     </a>              
     <div class="row">                  
      <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
        <thead>
          <tr>                      
            <th class="text-center">#</th>
            <th>Nombre</th>
            <th>clave</th>
            <th>descripción</th>                                            
            <th class="text-center">Opciones</th>
          </tr>
        </thead>                                                   
        @foreach($materias as $materia)
        <tbody>
          <tr>                      
            <td class="text-center">{{$materia->id}}</td>
            <td>{{$materia->name}}</td>
            <td>{{$materia->clave}}</td>
            <td class="text-left">{{$materia->descripcion}}</td>                                        
            <td class="td-actions">
              <form method="post" action="{{url('/director/grupo/'.$grupo->id.'/materias')}}">
                {{csrf_field()}}
                <input type="hidden" name="grupo_id" value="{{$grupo->id}}">
                <input type="hidden" name="materia_id" value="{{$materia->id}}">
                <input type="hidden" name="materia_name" value="{{$materia->name}}">
                <input type="hidden" name="materia_clave" value="{{$materia->clave}}">                              
                <button type="submit" rel="tooltip" title="Agregar materia" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                  <i class="material-icons">check</i>
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
