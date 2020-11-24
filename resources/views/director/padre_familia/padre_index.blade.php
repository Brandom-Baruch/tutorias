@extends('layouts.app')

@section('titulo','Listado de alumnos')

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
        <h3 class="title">Listado de Padres de familia</h3>
         <form method="get" action="{{url('/director/padre_familia/search')}}" class="form-inline p-5">
            <a href="{{url('/director/padre_familia/create')}}" class="btn btn-primary" style="margin-right:  20px;">
            Agregar nuevo Padre de familia</a>
            <input type="text"  placeholder="¿Qué familiar buscas?" class="form-control text-center " name="search">
            <button type="submit" class="btn btn-primary btn-fab  btn-rect">
                <i class="material-icons">search</i>
            </button>
          </form>
      </div>        
      <div>
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
        <div class="row">           
            <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido Paterno</th>
                        <th class="text-center">Apellido Materno</th>
                        <th class="text-center">Curp</th>
                        <th class="text-center">Profesión</th>
                        <th class="text-center">Escolaridad</th>
                        <th class="text-center">Opciones</th>
                    </tr>
                </thead>
                @foreach($padres as $padre)
                <tbody>                
                    <tr>
                        <td class="text-center">{{$padre->id}}</td>
                        <td class="text-center">{{$padre->name}}</td>
                        <td class="text-center">{{$padre->apellidoP}}</td>
                        <td class="text-center">{{$padre->apellidoM}}</td>
                        <td class="text-center">{{$padre->curp}}</td>
                        <td class="text-center">{{$padre->profesion}}</td>
                        <td class="text-center">{{$padre->escolaridad}}</td>
                        <td class="td-actions text-right">
                          <form method="post" action="{{url('/director/padre_familia/'.$padre->id.'/delete')}}">
                            {{csrf_field()}}

                            <a href="{{url('director/padre_familia/'.$padre->id.'/alumnos')}}" rel="tooltip" title="Asignar Parentezco" class="btn btn-warning btn-fab btn-fab-mini btn-rect btn-sm">
                                <i class="material-icons">person_search</i>
                            </a>

                            <a href="{{url('director/padre_familia/'.$padre->id.'/show')}}" rel="tooltip" title="Ver Padre de familia" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
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
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
