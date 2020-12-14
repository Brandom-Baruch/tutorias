@extends('layouts.app')

@section('titulo','Editar Docente')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 190px;"></div>
<div class="main main-raised">
    <div class="container">             
        <div class="section">
            <h2 class="title text-center" style="color:black;">Editar al Docente <b class="text-primary">{{$docente->name}}</b></h2>

             <form method="post" action="{{url('/director/docente/'.$docente->id.'/edit')}}">
                {{ csrf_field() }}
                <div class="row">            
                    <div class="col-sm-4">
                          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Nombre(s)</label>
                            <input type="text" class="form-control" 
                                   placeholder="Ejemplo: Brandom Baruch"
                                   value="{{ old('name', $docente->name) }}" 
                                   name="name">
                          </div>
                          @if ($errors->has('name'))
                              <span class="help-block text-danger">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                    </div>

                   <div class="col-sm-3">
                          <div class="form-group {{ $errors->has('apellidoP') ? ' has-error' : '' }}">
                            <label>Apellido Paterno</label>
                            <input type="text" class="form-control"  
                                   placeholder="Ejemplo: González" 
                                   value="{{ old('apellidoP', $docente->apellidoP) }}" 
                                   name="apellidoP">                     
                          </div>
                          @if ($errors->has('apellidoP'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('apellidoP') }}</strong>
                              </span>
                          @endif
                    </div>
                    
                    <div class="col-sm-3">
                          <div class="form-group {{ $errors->has('apellidoM') ? ' has-error' : '' }}">
                            <label>Apellido Materno</label>
                            <input type="text" class="form-control"  
                                   placeholder="Ejemplo: Cervantes" 
                                   value="{{old('apellidoM', $docente->apellidoM)}}"
                                   name="apellidoM">
                          </div>
                          @if ($errors->has('apellidoM'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('apellidoM') }}</strong>
                              </span>
                          @endif
                    </div>                      

                     <div class="col-sm-2">
                          <div class="form-group {{ $errors->has('edad') ? ' has-error' : '' }}">
                            <label>Edad</label>
                            <input type="number" class="form-control"  
                                   placeholder="Ejemplo: 21" 
                                   value="{{ old('edad', $docente->edad )}}"
                                   name="edad">
                          </div>
                          @if ($errors->has('edad'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('edad') }}</strong>
                              </span>
                          @endif
                    </div>

                   <div class="col-sm-4 ">
                          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>Correo electronico</label>
                            <input type="email" class="form-control"  
                                   placeholder="Ejemplo: L16240011@smartin.tecnm.mx" }
                                   value="{{ old('email', $docente->email) }}"
                                   name="email">
                          </div>
                          @if ($errors->has('email'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-2">
                          <div class="form-group {{ $errors->has('telefono_fijo') ? ' has-error' : '' }}">
                            <label>Telefono fijo</label>
                            <input type="tel" class="form-control"  
                                   placeholder="Ejemplo: 123-123-1234" 
                                   value="{{ old('telefono_fijo' , $docente->telefono_fijo) }}"
                                   name="telefono_fijo">
                          </div>
                          @if ($errors->has('telefono_fijo'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('telefono_fijo') }}</strong>
                              </span>
                          @endif
                    </div>                  

                    <div class="col-sm-2">
                          <div class="form-group {{ $errors->has('telefono_cel') ? ' has-error' : '' }}">
                            <label>Telefono celular</label>
                            <input type="tel" class="form-control"  
                                   placeholder="Ejemplo: 123-123-1234" 
                                   value="{{ old('telefono_cel' , $docente->telefono_cel) }}"
                                   name="telefono_cel">
                          </div>
                          @if ($errors->has('telefono_cel'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('telefono_cel') }}</strong>
                              </span>
                          @endif
                    </div>
                   
                    <div class="col-sm-4">
                          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Contraseña</label>
                            <input type="password" class="form-control"  
                                   placeholder="Contraseña"
                                   name="password" value="secret">
                            <small class="text-danger">La contraseña será secret</small>
                          </div>
                          @if ($errors->has('password'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-4">
                          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Confirmar contraseña</label>
                            <input type="password" class="form-control" 
                                   placeholder="Contraseña" name="password_confirmation"
                                   value="secret">                              
                          </div>                          
                    </div>

                </div>                                                                                        
                 
                <button class="btn btn-success">Registrar docente</button>
                <a href="{{url('/director/docentes/index')}}" class="btn btn-danger">Cancelar</a> 

             </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
