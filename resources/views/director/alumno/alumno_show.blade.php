@extends('layouts.app')

@section('titulo','Información del alumno ' . $alumno->name)

@section('body-class','profile-page sidebar-collapse')


@section('opciones_director')    

@include('includes.links_director')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 250px;" ></div>
<div class="main main-raised">
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="{{url('img/alumno.png')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Información del alumno <b class="text-primary">{{$alumno->name}}</b></h3>                
              </div>
            </div>
          </div>                  
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
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#datos" role="tab" data-toggle="tab">
                    <i class="material-icons">person</i> Datos generales
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#direccion" role="tab" data-toggle="tab">
                    <i class="material-icons">home</i> Domicilio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#parentezco" role="tab" data-toggle="tab">
                    <i class="material-icons">person_search</i> Parentezcos
                  </a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="#materias" role="tab" data-toggle="tab">
                    <i class="material-icons">chrome_reader_mode</i> Materias
                  </a>
                </li>                
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="datos">
            <div class="form-row">
            	<div class="form-group col-md-2">
                <label class="text-dark" class="text-dark">Nia</label>
                <input type="text" class="form-control" value="{{ $alumno->nia}}">            
              </div>
              <div class="form-group col-md-3">
                <label class="text-dark" class="text-dark">Nombre(s)</label>
                <input type="text" class="form-control" value="{{ $alumno->name}}">            
              </div>
              <div class="form-group col-md-3">
                <label class="text-dark">Apellido Paterno</label>
                <input type="text" class="form-control" value="{{ $alumno->apellidoP}}">            
              </div>
              <div class="form-group col-md-3">
                <label class="text-dark">Apellido Materno</label>
                <input type="text" class="form-control" value="{{$alumno->apellidoM}}">
              </div>          
              <div class="form-group col-md-4">
                <label class="text-dark">Correo electronico</label>
                <input type="text" class="form-control" value="{{$alumno->email}}">
              </div>
              <div class="form-group col-md-1">
                <label class="text-dark">Genero</label>
                <input type="text" class="form-control" value="{{$alumno->genero}}">
              </div>
              <div class="form-group col-md-2">
                <label class="text-dark">Grupo</label>
                <input type="text" class="form-control" value="{{$alumno->grupo->name}}">
              </div>
              <div class="form-group col-md-2">
                <label class="text-dark">Telefono celular</label>
                <input type="tel" class="form-control" value="{{$alumno->phone}}">
              </div>
              <div class="form-group col-md-2">
                <label class="text-dark">Fecha de nacimiento</label>
                <input type="tel" class="form-control" value="{{$alumno->fechaN}}">
              </div>                 
              <div class="form-group col-md-1">
                <label class="text-dark">Edad</label>
                <input type="number" class="form-control" value="{{$alumno->edad}}">
              </div>                
            </div>            
            <a href="{{url('director/alumno/'.$alumno->nia.'/edit')}}" class="btn btn-success" target="_blank">Editar información</a>
            <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>
          </div>
          <div class="tab-pane text-center gallery" id="direccion">                        
            @foreach($alumno->domicilios as $domicilio)
            <div class="form-row">
              <div class="form-group col-md-4">
                <label>Estado</label>
                <input type="text" class="form-control" value="{{$domicilio->estado}}">
              </div>
              <div class="form-group col-md-4">
                <label>Municipio</label>
                <input type="text" class="form-control" value="{{$domicilio->municipio}}">
              </div>
              <div class="form-group col-md-4">
                <label>Localidad</label>
                <input type="text" class="form-control" value="{{$domicilio->localidad}}">
              </div>
              <div class="form-group col-md-3">
                <label>Calle</label>
                <input type="text" class="form-control" value="{{$domicilio->calle}}">
              </div>
              <div class="form-group col-md-3">
                <label>Colonia</label>
                <input type="text" class="form-control" value="{{$domicilio->colonia}}">
              </div>
              <div class="form-group col-md-2">
                <label>No Interior</label>
                <input type="number" class="form-control" value="{{$domicilio->no_interior}}">
              </div>
              <div class="form-group col-md-2">
                <label>No Exterior</label>
                <input type="number" class="form-control" value="{{$domicilio->no_exterior}}">
              </div>
              <div class="form-group col-md-2">
                <label>Codigo Postal</label>
                <input type="number" class="form-control" value="{{$domicilio->cp}}">
              </div>                    
            </div>    
            @if($alumno->domicilios->count() == 1)
            <form method="post" action="{{url('director/alumno/'.$alumno->nia.'/domicilio/'.$domicilio->id.'/delete')}}" >
              {{ csrf_field() }}
              <button type="submit" class="btn btn-primary" >¿El domicilio no es el correcto?</button>              
              <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Regresar</a>
            </form>                
            @endif                                          
            @endforeach   
            @if($alumno->domicilios->count() == 0)
            <h3 class="text-danger">No tiene asignado un domicilio</h3>
            <a href="{{url('director/alumno/'.$alumno->nia.'/domicilio')}}" class="btn btn-success">Agregar Domicilio</a>
            <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Regresar</a>                            
            @endif
          </div>
          <div class="tab-pane text-center gallery" id="parentezco">
            @if($alumno->padres->isEmpty())
            <h3 class="text-danger">No tiene parentesco con un familiar</h3>
            @else
            <div class="row">
              <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nombre</th>                                                                         
                    <th class="text-center">Parentezco</th>
                    <th class="text-center">Opciones</th>                                                                        
                  </tr>
                </thead>                                
                <tbody>
                  @foreach($alumno->padres as $numero => $padre)
                  <tr>
                    <td class="text-center">{{($numero+1)}}</td>                                                        
                    <td class="text-center">{{$padre->name}} {{$padre->apellidoP}} {{$padre->apellidoM}}</td> 
                    <td class="text-center">{{$padre->pivot->parentezco}}</td>
                    <td class="td-actions">                                                     
                      <form method="post" action="{{url('director/alumno/'.$alumno->nia.'/familiares/'.$padre->id.'/delete')}}">
                        {{csrf_field()}}
                        <a href="{{url('/director/padre_familia/'.$padre->id.'/show')}}" 
                          rel="tooltip" title="Ver Familiar" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm" target="_blank">
                          <i class="material-icons">person</i>
                        </a>                                                      
                        <button rel="tooltip" title="Quitar Familiar" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                          <i class="material-icons">clear</i>
                        </button>
                      </form>
                    </td>
                  </tr>               
                  @endforeach
                </tbody>                                
              </table>                
            </div>
            @endif            
            <a href="{{url('director/alumno/'.$alumno->nia.'/familiares')}}" class="btn btn-success" target="_blank">Agregar familiar</a>
            <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Regresar</a>
          </div>
          <div class="tab-pane text-center gallery" id="materias">
            @if($materia->isEmpty())
            <h3 class="text-danger">No tiene materias el grupo</h3>
            @else
            <h3>Materias del grupo <b>{{$grupo->name}}</b></h3>
            <div class="row">
              <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nombre</th>                                                                          
                    <th class="text-center">Clave</th>
                    <th class="text-center">Descripción</th>                                                                               
                  </tr>
                </thead>                                
                <tbody>
                  @foreach($materia as $materia)
                  <tr>
                    <td class="">{{$materia->id}}</td>                                                        
                    <td class="">{{$materia->name}}</td>
                    <td class="">{{$materia->clave}}</td>
                    <td class="text-left">{{$materia->descripcion}}</td>                     
                  </tr>               
                  @endforeach
                </tbody>                                
              </table>                
            </div>               
            @endif            
            <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Regresar</a>
            <a href="{{url('director/grupo/'.$grupo->id.'/materias/show')}}" class="btn btn-success">Ver Grupo</a>
          </div>         
        </div>              
      </div>
    </div>
  </div>
  @include('includes.footer')
  @endsection