@extends('layouts.app')

@section('titulo','Agregar Padre de familia')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 200px;"></div>
<div class="main main-raised">
    <div class="container">             

        <div class="section">

            <h2 class="title text-center" style="color:black;">Registrar nuevo padre de familia</h2>
          
             <form method="post" action="/director/padre_familia/create">
                {{ csrf_field() }}

                <div class="row">            
                    <div class="col-sm-3">
                          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Nombre(s)</label>
                            <input type="text" class="form-control"                        
                                   placeholder="Ejemplo: Brandom Baruch" 
                                   value="{{ old('name') }}" name="name">
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
                                   value="{{ old('apellidoP') }}" 
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
                                   value="{{ old('apellidoM') }}"
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
                                   value="{{ old('edad') }}"
                                   name="edad">
                          </div>
                          @if ($errors->has('edad'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('edad') }}</strong>
                              </span>
                          @endif
                    </div>
             
                    <div class="col-sm-2">
                          <div class="form-group {{ $errors->has('telefono_fijo') ? ' has-error' : '' }}">
                            <label>Telefono fijo</label>
                            <input type="tel" class="form-control" 
                                   placeholder="Ejemplo: 123-123-1234" 
                                   value="{{ old('telefono_fijo') }}"
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
                                   value="{{ old('telefono_cel') }}"
                                   name="telefono_cel">
                          </div>
                          @if ($errors->has('telefono_cel'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('telefono_cel') }}</strong>
                              </span>
                          @endif
                    </div>                 

                    <div class="col-sm-3">
                          <div class="form-group {{ $errors->has('curp') ? ' has-error' : '' }}">
                            <label>Curp</label>
                            <input type="text" class="form-control"
                                   placeholder="GOCB980828HTLNRR07" 
                                   value="{{ old('curp') }}" 
                                   name="curp" style="text-transform: uppercase;">
                          </div>
                          @if ($errors->has('curp'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('curp') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-2">                          
                          <div class="form-group{{ $errors->has('estado_civil') ? ' has-error' : '' }}">          
                            <label>Estado Civil</label>
                              <select class="form-control " name="estado_civil" >
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Soltero(a)">Soltero(a)</option>                                
                              </select>
                          </div>

                          @if ($errors->has('estado_civil'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('estado_civil') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-2">                          
                          <div class="form-group{{ $errors->has('escolaridad') ? ' has-error' : '' }}">          
                            <label>Escolaridad</label>
                              <select class="form-control " name="escolaridad" >
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                                <option value="Preparatoria">Preparatoria</option>
                                <option value="Universidad">Universidad</option>
                              </select>
                          </div>

                          @if ($errors->has('estado_civil'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('estado_civil') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-2">
	                      <div class="form-group {{ $errors->has('ocupacion') ? ' has-error' : '' }}">
	                        <label>Ocupación</label>
	                        <input type="text" class="form-control" 
                                 placeholder="Ejemplo: Artesano"
	                               value="{{ old('ocupacion') }}"
	                               name="ocupacion">
	                      </div>
	                      @if ($errors->has('ocupacion'))
	                          <span class="help-block text-center text-danger">
	                              <strong>{{ $errors->first('ocupacion') }}</strong>
	                          </span>
	                      @endif
                    </div>

                    <div class="col-sm-2">
	                      <div class="form-group {{ $errors->has('profesion') ? ' has-error' : '' }}">
	                        <label>Profesión</label>
	                        <input type="text" class="form-control" 
                                 placeholder="Ejemplo: Cientifico"
	                               value="{{ old('profesion') }}"
	                               name="profesion">
	                      </div>
	                      @if ($errors->has('profesion'))
	                          <span class="help-block text-center text-danger">
	                              <strong>{{ $errors->first('profesion') }}</strong>
	                          </span>
	                      @endif
                    </div>

           	      	<div class="col-sm-3">
	                      <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
	                        <label>Correo electronico</label>
	                        <input type="email" class="form-control" 
	                               placeholder="Ejemplo:baruchoo94@outlook.com" 
                                 value="{{ old('email') }}"
	                               name="email">
	                      </div>
	                      @if ($errors->has('email'))
	                          <span class="help-block text-center text-danger">
	                              <strong>{{ $errors->first('email') }}</strong>
	                          </span>
	                      @endif
                    </div>

                    <div class="col-sm-3">
                          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" 
                                   placeholder="Por defecto es: secret"
                                   name="password" 
                                   value="secret">
                          </div>
                          @if ($errors->has('password'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-3">
                          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Confirmar contraseña</label>
                            <input type="password" class="form-control"  
                                   placeholder="Por defecto es: secret" 
                                   name="password_confirmation"
                                   value="secret">
                              <small  class="form-text text-muted">La contraseña por defecto es <b class="text-danger">secret</b></small>
                          </div>                          
                    </div>

                </div>                                                                                        
                 
                <button class="btn btn-success">Registrar docente</button>
                <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Cancelar</a> 

             </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
