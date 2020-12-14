@extends('layouts.app')

@section('titulo','Listado de docentes')

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
        <h3 class="title">Listado de Docentes</h3>
      </div>        
      <div class="tab-pane text-center">
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
      <a href="{{url('/director/docente/create')}}" class="btn btn-primary" style="margin-bottom: 30px;">Agregar nuevo Docente</a>
      <div class="row">          
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
          @foreach($docentes as  $docente)
          <tbody>
            <tr>
              <td class="text-center">{{$docente->id}}</td>
              <td>{{$docente->name}}</td>
              <td>{{$docente->apellidoP}}</td>
              <td>{{$docente->apellidoM}}</td>                  
              <td class="text-center">{{$docente->email}}</td>
              <td class="td-actions text-center">
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
      </div>                                                                        
      <div class="d-flex">
        <div class="mx-auto">
          {{ $docentes->links("pagination::bootstrap-4") }}
        </div>
      </div>
    </div>                       
  </div>
</div>
</div>
@include('includes.footer')
@endsection
