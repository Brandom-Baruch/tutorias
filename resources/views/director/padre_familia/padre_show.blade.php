@extends('layouts.app')

@section('titulo','Información del padre ' . $padre->name)

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
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="{{url('img/padre6.png')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Información del padre de familia <b class="text-primary">{{$padre->name}}</b></h3>                
              </div>
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
         @if (session('eliminado')) <!--Si existe un de la variable eliminado, mostrara el contenido del de la variable eliminado-->   <div class="alert alert-danger text-left">
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
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="datos">
            <div class="form-row">
                <div class="form-group col-md-4">
                  <label class="text-dark" class="text-dark">Nombre(s)</label>
                  <input type="text" class="form-control" value="{{$padre->name}}" name="name">            
                </div>
                <div class="form-group col-md-4">
                  <label class="text-dark">Apellido Paterno</label>
                  <input type="text" class="form-control" value="{{$padre->apellidoP}}" name="apellidoP">            
                </div>
                <div class="form-group col-md-4">
                  <label class="text-dark">Apellido Materno</label>
                  <input type="text" class="form-control" value="{{$padre->apellidoM}}" name="apellidoM">
                </div>          
                <div class="form-group col-md-4">
                  <label class="text-dark">Correo electronico</label>
                  <input type="text" class="form-control" value="{{$padre->email}}" name="email">
                </div>
                <div class="form-group col-md-4">
                  <label class="text-dark">profesion</label>
                  <input type="text" class="form-control" value="{{$padre->profesion}}" name="profesion">
                </div>
                <div class="form-group col-md-4">
                  <label class="text-dark">Ocupación</label>
                  <input type="text" class="form-control" value="{{$padre->ocupacion}}" name="ocupacion">
                </div>
                <div class="form-group col-md-3">
                  <label class="text-dark">Telefono fijo</label>
                  <input type="tel" class="form-control" value="{{ $padre->telefono_fijo}}"name="telefono_fijo">
                </div>
                <div class="form-group col-md-3">
                  <label class="text-dark">Telefono celular</label>
                  <input type="tel" class="form-control" value="{{ $padre->telefono_cel}}"name="telefono_cel">
                </div> 
                <div class="form-group col-md-3">
                  <label class="text-dark">Curp</label>
                  <input type="text" class="form-control" value="{{ $padre->curp}}"name="curp">
                </div>
                <div class="form-group col-md-3">
                  <label class="text-dark">Escolaridad</label>
                  <input type="text" class="form-control" value="{{ $padre->escolaridad}}"name="escolaridad">
                </div>
                <div class="form-group col-md-3">
                  <label class="text-dark">Estado civil</label>
                  <input type="text" class="form-control" value="{{ $padre->estado_civil}}"name="estado_civil">
                </div>
                <div class="form-group col-md-2">
                  <label class="text-dark">Edad</label>
                  <input type="number" class="form-control" value="{{ $padre->edad}}"name="edad">
                </div>                
            </div>            
            <a href="{{url('director/padre_familia/'.$padre->id.'/edit')}}" class="btn btn-success" target="_blank">Editar información</a>
            <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>
          </div>
          <div class="tab-pane text-center gallery" id="direccion">                        
              @foreach($padre->domicilios as $domicilio)
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label>Estado</label>
                      <input type="text" class="form-control" placeholder="Ejemplo: Puebla" name="estado" 
                             value="{{$domicilio->estado}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label>Municipio</label>
                      <input type="text" class="form-control" placeholder="Ejemplo: Santa Ana Nopalucan" name="municipio"
                             value="{{$domicilio->municipio}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label>Localidad</label>
                      <input type="text" class="form-control"  placeholder="1234 Main St" name="localidad" 
                             value="{{$domicilio->localidad}}">
                    </div>
                    <div class="form-group col-md-3">
                      <label>Calle</label>
                      <input type="text" class="form-control"  placeholder="Apartment, studio, or floor" name="calle"
                             value="{{$domicilio->calle}}">
                    </div>
                    <div class="form-group col-md-3">
                      <label>Colonia</label>
                      <input type="text" class="form-control"  placeholder="Apartment, studio, or floor" name="colonia"
                             value="{{$domicilio->colonia}}">
                    </div>
                    <div class="form-group col-md-2">
                      <label>No Interior</label>
                      <input type="number" class="form-control" placeholder="11"  name="no_interior"
                             value="{{$domicilio->no_interior}}">
                    </div>
                    <div class="form-group col-md-2">
                      <label>No Exterior</label>
                      <input type="number" class="form-control" placeholder="11"  name="no_exterior"
                             value="{{$domicilio->no_exterior}}">
                    </div>
                    <div class="form-group col-md-2">
                      <label>Codigo Postal</label>
                      <input type="number" class="form-control" placeholder="90135"  name="cp"
                             value="{{$domicilio->cp}}">
                    </div>                    
                </div>    
                @if($padre->domicilios->count() == 1)
                <form method="post" action="{{url('director/padre_familia/'.$padre->id.'/domicilio/'.$domicilio->id.'/delete')}}" >
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-primary" >¿El domicilio no es el correcto?</button>              
                  <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>
                </form>                
                @endif                                          
              @endforeach   
              @if($padre->domicilios->count() == 0)
                <a href="{{url('director/padre_familia/'.$padre->id.'/domicilio')}}" class="btn btn-success">Agregar Domicilio</a>
                <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>                            
              @endif
          </div>
          <div class="tab-pane text-center gallery" id="parentezco">
            <div class="row">
              <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                    <tr>
                        <th class="text-center">NIA</th>
                        <th class="text-center">Alumno</th>                                                                          
                        <th class="text-center">Parentezco</th>
                        <th class="text-center">Opciones</th>                                                                        
                    </tr>
                </thead>                                
                  <tbody>
                    @foreach($padre->alumnos as $alumno)
                      <tr>                                                        
                          <td class="text-center">{{$alumno->nia}}</td>
                          <td class="text-center">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</td>
                          <td class="text-center">{{$alumno->pivot->parentezco}}</td>
                          <td class="td-actions">                                                     
                            <a href="{{url('/director/alumno/'.$alumno->nia.'/show')}}" 
                                rel="tooltip" title="Ver Alumno" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm" target="_blank">
                                <i class="material-icons">person</i>
                            </a>                                                      
                          </td>
                      </tr>               
                    @endforeach
                  </tbody>                                
              </table>                
            </div>
            <a href="{{url('director/padre_familia/'.$padre->id.'/alumnos')}}" class="btn btn-success" target="_blank">Agregar familiar</a>
            <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>
          </div>         
        </div>              
      </div>
    </div>
  </div>
@include('includes.footer')
@endsection