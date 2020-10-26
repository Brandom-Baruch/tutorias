@extends('layouts.app')

@section('titulo','Panel de control')
@section('body-class','profile-page sidebar-collapse')
@section('estilo')
  <style type="text/css">    
    .descrip {
        width: 310px;
    }
    .opcionesD{
        width: 300px;
    }
  
  </style>
@endsection

@section('opciones_director')    
<a href="{{url('director/index')}}">Panel de control</a>          
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
      <h3 class="title">Bienvenido {{Auth::user()->name}}</h3>
    </div>
    <div class="row">
      <div class="col-md-7 ml-auto mr-auto">
        <div class="profile-tabs">
          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
            <li class="nav-item">
              <a class="nav-link" href="#docentes" role="tab" data-toggle="tab">
                <i class="material-icons">recent_actors</i> Docentes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#alumnos" role="tab" data-toggle="tab">
                <i class="material-icons">face</i> Alumnos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#padre_familia" role="tab" data-toggle="tab">
                <i class="material-icons">supervisor_account</i> Padres de familia
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tutorados" role="tab" data-toggle="tab">
                <i class="material-icons">how_to_reg</i> Tutorados
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#materias" role="tab" data-toggle="tab">
                <i class="material-icons">menu_book</i> Materias
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content tab-space">        
      <div class="tab-pane  text-center gallery" id="docentes">
       @if (session('mensaje_docente')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
            <div class="alert alert-success text-left">
                <div class="container-fluid">
                  <div class="alert-icon">
                    <i class="material-icons">check</i>
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                  </button>
                  {{ session('mensaje_docente') }}
                </div>
            </div>
        @endif
        @if (session('eliminado_docente')) <!--Si existe un de la variable eliminado, mostrara el contenido del de la variable eliminado-->           
            <div class="alert alert-danger text-left">
                <div class="container-fluid">
                  <div class="alert-icon">
                    <i class="material-icons">check</i>
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                  </button>
                  {{ session('eliminado_docente') }}
                </div>
            </div>
        @endif  
        <a href="{{url('/director/docente/create')}}" class="btn btn-primary">Agregar nuevo Docente</a>
        <div class="row">
          <h3>Listado de Docentes</h3>
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>                      
                      <th class="text-center">Correo Electronico</th>
                      <th class="text-center">Opciones</th>
                  </tr>
              </thead>
              @foreach($docentes as $key => $docente)
              <tbody>
                  <tr>
                      <td class="text-center">{{$docente->id}}</td>
                      <td>{{$docente->name}}</td>
                      <td>{{$docente->apellidoP}}</td>
                      <td>{{$docente->apellidoM}}</td>                  
                      <td class="text-center">{{$docente->email}}</td>
                      <td class="td-actions text-center opcionesD">
                          <form method="post" action="{{url('/director/docente/'.$docente->id.'/delete')}}">
                            {{csrf_field()}}
                            <a href="{{url('director/docente/'.$docente->id.'/view')}}" rel="tooltip" title="Ver docente" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                                <i class="fa fa-user"></i>
                            </a>

                            <a href="{{url('/director/docente/'.$docente->id.'/edit')}}" 
                            rel="tooltip" title="Editar docente" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" rel="tooltip" title="Eliminar docente" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                                <i class="fa fa-times"></i>
                            </button>
                          </form>
                      </td>
                  </tr>                 
              </tbody>
              @endforeach
          </table>                       
          {{ $docentes->links("pagination::bootstrap-4") }} <!--Paginación-->                           
        </div>                                                                        
      </div>            
      <div class="tab-pane  text-center gallery" id="alumnos">
        @if (session('mensaje_alumno')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
            <div class="alert alert-success text-left">
                <div class="container-fluid">
                  <div class="alert-icon">
                    <i class="material-icons">check</i>
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                  </button>
                  {{ session('mensaje_alumno') }}
                </div>
            </div>
        @endif
        @if (session('eliminado_alumno')) <!--Si existe un de la variable eliminado, mostrara el contenido del de la variable eliminado-->           
            <div class="alert alert-danger text-left">
                <div class="container-fluid">
                  <div class="alert-icon">
                    <i class="material-icons">check</i>
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                  </button>
                  {{ session('eliminado_alumno') }}
                </div>
            </div>
        @endif  
        <a href="{{url('/director/alumno/create')}}" class="btn btn-primary">Agregar nuevo Alumno</a>
        <div class="row">
          <h3>Listado de Alumnos</h3>
          <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
              <thead>
                  <tr>
                      <th class="text-center">NIA</th>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th class="text-right">Grupo</th>
                      <th class="text-right">Actions</th>
                  </tr>
              </thead>
              @foreach($alumnos as $alumno)
              <tbody>
                  <tr>
                      <td class="text-center">{{$alumno->nia}}</td>
                      <td>{{$alumno->name}}</td>
                      <td>{{$alumno->apellidoP}}</td>
                      <td>{{$alumno->apellidoM}}</td>
                      <td class="text-right">{{$alumno->grupo_nombre}}</td>
                      <td class="td-actions text-right">
                        <form method="post" action="{{url('/director/alumno/'.$alumno->nia.'/delete')}}">
                            {{csrf_field()}}                          
                          <a href="" rel="tooltip" title="Ver Alumno" 
                          class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-user"></i>
                          </a>

                          <a href="{{url('/director/alumno/'.$alumno->nia.'/edit')}}" rel="tooltip" title="Editar Alumno" 
                          class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-edit"></i>
                          </a>
                          <button type="submit" rel="tooltip" title="Eliminar Alumno" 
                          class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-times"></i>
                          </button>
                        </form>
                      </td>
                  </tr>                 
              </tbody>              
              @endforeach
          </table>
          {{ $alumnos->links("pagination::bootstrap-4") }}
        </div>
      </div>
      <div class="tab-pane  text-center gallery" id="padre_familia">
        @if (session('mensaje_padre')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
            <div class="alert alert-success text-left">
                <div class="container-fluid">
                  <div class="alert-icon">
                    <i class="material-icons">check</i>
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                  </button>
                  {{ session('mensaje_padre') }}
                </div>
            </div>
        @endif
        @if (session('eliminado_padre')) <!--Si existe un de la variable eliminado, mostrara el contenido del de la variable eliminado-->           
            <div class="alert alert-danger text-left">
                <div class="container-fluid">
                  <div class="alert-icon">
                    <i class="material-icons">check</i>
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                  </button>
                  {{ session('eliminado_padre') }}
                </div>
            </div>
        @endif  
        <a href="{{url('/director/padre_familia/create')}}" class="btn btn-primary">Agregar nuevo Padre de familia</a>
        <div class="row">
           <h3>Listado de Padres de familia</h3>
            <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th class="text-center">Ocupación</th>
                        <th class="text-center">Profesión</th>
                        <th class="text-center">Escolaridad</th>
                        <th class="text-center">Opciones</th>
                    </tr>
                </thead>
                @foreach($padres as $padre)
                <tbody>                
                    <tr>
                        <td class="text-center">{{$padre->id}}</td>
                        <td>{{$padre->name}}</td>
                        <td>{{$padre->apellidoP}}</td>
                        <td>{{$padre->apellidoM}}</td>
                        <td class="text-center">{{$padre->ocupacion}}</td>
                        <td class="text-center">{{$padre->profesion}}</td>
                        <td class="text-center">{{$padre->escolaridad}}</td>
                        <td class="td-actions text-right">
                          <form method="post" action="{{url('/director/padre_familia/'.$padre->id.'/delete')}}">
                            {{csrf_field()}}
                            <a href="" rel="tooltip" title="Ver Padre de familia" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                                <i class="fa fa-user"></i>
                            </a>

                            <a  href="{{url('director/padre_familia/'.$padre->id.'/edit')}}" rel="tooltip" title="Editar Padre de familia" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" rel="tooltip" title="Eliminar Padre de familia" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                                <i class="fa fa-times"></i>
                            </button>
                          </form>
                        </td>
                    </tr>                  
                </tbody>
                @endforeach
            </table>
            {{ $padres->links("pagination::bootstrap-4") }} <!--Paginación-->                         
        </div>
      </div>
      <div class="tab-pane text-center gallery" id="tutorados">
        <div class="row">
         <h3>Listado de Tutorados</h3>
          <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th>Name</th>
                      <th>Job Position</th>
                      <th>Since</th>
                      <th class="text-right">Salary</th>
                      <th class="text-right">Actions</th>
                  </tr>
              </thead>
              @foreach($padres as $padre)
              <tbody>
                  <tr>
                      <td class="text-center">{{$padre->id}}</td>
                      <td>{{$padre->name}}</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-user"></i>
                          </button>

                          <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-edit"></i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-times"></i>
                          </button>
                      </td>
                  </tr>                 
              </tbody>
              @endforeach
          </table>          
        </div>
      </div>
      <div class="tab-pane active text-center gallery" id="materias">
        @if (session('mensaje_materia')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
            <div class="alert alert-success text-left">
                <div class="container-fluid">
                  <div class="alert-icon">
                    <i class="material-icons">check</i>
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                  </button>
                  {{ session('mensaje_materia') }}
                </div>
            </div>
        @endif
        @if (session('eliminado_materia')) <!--Si existe un de la variable eliminado, mostrara el contenido del de la variable eliminado-->           
            <div class="alert alert-danger text-left">
                <div class="container-fluid">
                  <div class="alert-icon">
                    <i class="material-icons">check</i>
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                  </button>
                  {{ session('eliminado_materia') }}
                </div>
            </div>
        @endif  
        <a href="{{url('/director/materia/create')}}" class="btn btn-primary">Agregar nueva materia</a>
        <div class="row">
         <h3>Listado de Materias</h3>
         <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">Nombre</th>
                      <th class="text-center">Descripción</th>                            
                      <th class="text-center">Clave</th>
                      <th class="text-center">Opciones</th>
                  </tr>
              </thead>
              @foreach($materias as $materia)
              <tbody>
                  <tr>
                      <td class="text-center">{{$materia->id}}</td>
                      <td>{{$materia->name}}</td>
                      <td class="text-left descrip">{{$materia->descripcion}}</td>                                            
                      <td>{{$materia->clave}}</td>
                      <td class="td-actions text-center opcionesM">
                        <form method="post" action="{{url('director/materia/'.$materia->id.'/delete')}}">
                          {{csrf_field()}}

                          <a href="{{url('director/materia/'.$materia->id.'/docentes')}}" rel="tooltip" title="Materias del profesor" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-user"></i>
                          </a>                         

                          <a href="{{url('director/materia/'.$materia->id.'/edit')}}" rel="tooltip" title="Editar Materia" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-edit"></i>
                          </a >
                          <button type="submit" rel="tooltip" title="Eliminar Materia" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-times"></i>
                          </button>
                        </form>
                      </td>
                  </tr>                 
              </tbody>
              @endforeach
          </table>
          {{ $materias->links("pagination::bootstrap-4") }}          
        </div>
         <!--Paginación-->                           
      </div>
    </div>
  </div>
</div>
</div>
@include('includes.footer')
@endsection
