@extends('layouts.app')

@section('titulo','Asignar docentes para la materia ')

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
              <!--<h3 class="title" style="color: white;">Bienvenido {{Auth::user()->name}}</h3>-->
            </div>
          </div>
        </div>
      </div>
      <div class="description text-center">       
        <h3 class="title">Asignar docentes para la materia <b class="text-primary">{{$materia->name}}</b></h3>         
        <form method="post" action="{{url('/director/materia/'.$materia->id.'/docentes')}}">
          {{ csrf_field() }}
            <div class="form-group">
              <label style="color: black;">Selecciona un docente</label>
              <select class="form-control"  name="docente_id"  style="color: black;">
                @foreach($docentes as $docente)
                  <option value="{{$docente->id}}" style="color: black;">{{$docente->name}}</option>
                @endforeach
              </select>
            </div>
          <button class="btn btn-primary">Agregar docente</button>
          <a href="{{url('director/materias/index')}}" class="btn btn-danger">Regresar al panel de control</a>
        </form>        
      </div>    
      <div class="tab-content tab-space">
       @if (session('mensaje')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
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
          <hr style="border-top-color: black;">
          <div class="row">         
           <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                    <tr>                        
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido Paterno</th>                            
                        <th class="text-center">Apellido Materno</th>
                        <th class="text-center">Opciones</th>
                    </tr>
                </thead>                                
                    <tbody>
                      @foreach($materia->docentes as $key => $docente)
                        <tr>                            
                            <td class="text-center">{{$docente->name}}</td>
                            <td class="text-center">{{$docente->apellidoP}}</td>                                                   
                            <td class="text-center">{{$docente->apellidoM}}</td>                            
                            <td class="td-actions text-center opcionesM">
                              <form method="post" 
                                    action="{{url('/director/materia/'.$materia->id.'/docentes/'.$docente->id.'/delete')}}">
                                {{csrf_field()}}

                                <a href="{{url('director/docente/'.$docente->id.'/view')}}" rel="tooltip" title="Visualizar Docente" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm" target="_blank">
                                    <i class="fa fa-user"></i>
                                </a>
                                
                                <button type="submit" rel="tooltip" title="Quitar docente" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                                    <i class="fa fa-times"></i>
                                </button>
                              </form>
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
@include('includes.footer')
@endsection
