@extends('layouts.app')

@section('titulo','Editar Docente')
@section('body-class','profile-page sidebar-collapse')

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
                            <label for="name">Nombre(s)</label>
                            <input type="text" class="form-control" id="name" placeholder="Ejemplo: Brandom Baruch" value="{{ old('name', $docente->name) }}" name="name">
                          </div>
                          @if ($errors->has('name'))
                              <span class="help-block text-danger">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                    </div>

                   <div class="col-sm-3">
                          <div class="form-group {{ $errors->has('apellidoP') ? ' has-error' : '' }}">
                            <label for="apellidoP">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidoP" 
                            placeholder="Ejemplo: González" 
                            value="{{ old('apellidoP', $docente->apellidoP) }}" name="apellidoP">                     
                          </div>
                          @if ($errors->has('apellidoP'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('apellidoP') }}</strong>
                              </span>
                          @endif
                    </div>
                    
                    <div class="col-sm-3">
                          <div class="form-group {{ $errors->has('apellidoM') ? ' has-error' : '' }}">
                            <label for="exampleFormControlInput1">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidoM" 
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
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control" id="edad" 
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
                            <label for="email">Correo electronico</label>
                            <input type="email" class="form-control" id="email" 
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
                            <label for="telefono_fijo">Telefono fijo</label>
                            <input type="tel" class="form-control" id="telefono_fijo" 
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
                            <label for="telefono_cel">Telefono celular</label>
                            <input type="tel" class="form-control" id="telefono_cel" 
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
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" 
                              placeholder="Contraseña"
                              name="password" value="{{old('password')}}">
                          </div>
                          @if ($errors->has('password'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-4">
                          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="password-confirm" 
                              placeholder="Contraseña" name="password_confirmation"
                              value="{{old('password_confirmation')}}">                              
                          </div>                          
                    </div>

                </div>                                                                                        
                 
                <button class="btn btn-primary">Registrar docente</button>
                <a href="{{url('/director/index')}}" class="btn btn-danger">Cancelar</a> 

             </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
