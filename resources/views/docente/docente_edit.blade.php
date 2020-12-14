@extends('layouts.app')

@section('titulo','Editar Docente')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')

  @if(Auth::user()->puestos->where('puesto','Director')->first())
      @include('includes.links_director')
  @endif
  @if(Auth::user()->materias()->where('name','like','%tutorias%')->get() && 
        Auth::user()->puestos->where('puesto','Tutor')->first())
    <a href="{{url('docente/tutorias')}}">Tutorias</a>
  @endif
  <a href="{{url('docente')}}">Panel de control</a>
  
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 190px;"></div>
<div class="main main-raised">
    <div class="container">             
        <div class="section">
            <h2 class="title text-center" style="color:black;">Editar al Docente <b class="text-primary">{{Auth::user()->name}}</b></h2>

             <form method="post" action="{{url('/docente/'.Auth::user()->id.'/edit')}}">
                {{ csrf_field() }}
                <div class="row">            
                    <div class="col-sm-4">
                          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Nombre(s)</label>
                            <input type="text" class="form-control" 
                                   placeholder="Ejemplo: Brandom Baruch"
                                   value="{{ old('name', Auth::user()->name) }}" 
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
                                   value="{{ old('apellidoP', Auth::user()->apellidoP) }}" 
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
                                   value="{{old('apellidoM', Auth::user()->apellidoM)}}"
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
                                   value="{{ old('edad', Auth::user()->edad )}}"
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
                                   value="{{ old('email', Auth::user()->email) }}"
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
                                   value="{{ old('telefono_fijo' , Auth::user()->telefono_fijo) }}"
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
                                   value="{{ old('telefono_cel' , Auth::user()->telefono_cel) }}"
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
                                   name="password_confirmation"
                                   value="secret">                              
                          </div>                          
                    </div>
                    <button class="btn btn-success">Registrar docente</button>
                    <a href="{{url('/director/docentes/index')}}" class="btn btn-danger">Cancelar</a>
                </div>                          
             </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
