@extends('layouts.app')

@section('titulo','Editar Alumno '. $alumno->nia)

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 200px;"></div>
<div class="main main-raised">
    <div class="container">             

        <div class="section">

            <h2 class="title text-center" style="color:black;">Editar al alumno <b class="text-primary">{{$alumno->name}}</b></h2>
      
             <form method="post" action="{{url('/director/alumno/'.$alumno->nia.'/edit')}}">
                {{ csrf_field() }}

                <div class="row"> 
                    <div class="col-sm-2">
                          
                          <div class="form-group  {{ $errors->has('nia') ? ' has-error' : '' }}">
                            <label for="number">NIA</label>
                            <input type="number" class="form-control" id="nia" 
                              placeholder="Ejemplo: 16240011" 
                              value="{{ old('nia', $alumno->nia) }}" name="nia">
                            <small  
                            class="form-text text-muted text-danger">Cambiar el NIA del alumno  si es necesario 
                            </small>
                          </div>

                          @if ($errors->has('nia'))
                              <span class="help-block text-danger">
                                  <strong>{{ $errors->first('nia') }}</strong>
                              </span>
                          @endif
                    </div>


                    <div class="col-sm-4">
                          
                          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Nombre(s)</label>
                            <input type="text" class="form-control" id="name" placeholder="Ejemplo: Brandom Baruch" value="{{ old('name', $alumno->name) }}" name="name">
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
                            placeholder="Ejemplo: González" value="{{ old('apellidoP', $alumno->apellidoP) }}" 
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
                            <label for="exampleFormControlInput1">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidoM" 
                            placeholder="Ejemplo: Cervantes" value="{{ old('apellidoM', $alumno->apellidoM) }}"
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
                            placeholder="Ejemplo: 21" value="{{ old('edad' , $alumno->edad) }}"
                            name="edad">
                          </div>

                          @if ($errors->has('edad'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('edad') }}</strong>
                              </span>
                          @endif
                    </div>

                   <div class="col-sm-4">
                          
                          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Correo electronico</label>
                            <input type="email" class="form-control" id="email" 
                            placeholder="Ejemplo: L16240011@smartin.tecnm.mx" 
                            value="{{ old('email', $alumno->email) }}"
                            name="email">
                          </div>

                          @if ($errors->has('email'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-2">
                          
                          <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone">Telefono</label>
                            <input type="tel" class="form-control" id="phone" 
                            placeholder="Ejemplo: 123-123-1234" value="{{ old('phone', $alumno->phone) }}"
                            name="phone">
                          </div>

                          @if ($errors->has('phone'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('phone') }}</strong>
                              </span>
                          @endif
                    </div>                  

                    <div class="col-sm-2">
                          
                          <div class="form-group{{ $errors->has('grupo_id') ? ' has-error' : '' }}">          
                            <label for="grupo_id">Grupo</label>
                              <select class="form-control " name="grupo_id" >
                                <option value="0">Sin grupo</option>
                                @foreach($grupo as $grupo)
                                <option value="{{$grupo->id}}"                                   
                                  @if($grupo->id == old('grupo_id', $alumno->grupo_id)) selected @endif>
                                  {{$grupo->name}}
                                </option>
                                @endforeach
                              </select>
                          </div>

                          @if ($errors->has('grupo_id'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('grupo_id') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-2">
                          
                          <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">          
                            <label for="genero">Genero</label>
                              <select class="form-control " name="genero" >
                                <option value="H"
                                @if($alumno->genero == 'H') selected @endif>
                                  H
                                </option>
                                <option value="M"
                                @if($alumno->genero == 'M')  selected @endif>
                                  M
                                </option>                                                          
                              </select>
                          </div>

                          @if ($errors->has('genero'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('genero') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-2">
                          
                          <div class="form-group {{ $errors->has('fechaN') ? ' has-error' : '' }}">
                            <label for="fechaN">fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fechaN" 
                            placeholder="Ejemplo: 1998-08-28" value="{{ old('fechaN' , $alumno->fechaN) }}"
                            name="fechaN">                            
                          </div>

                          @if ($errors->has('fechaN'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('fechaN') }}</strong>
                              </span>
                          @endif
                    </div>
                   
                    <div class="col-sm-3">
                          
                          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" 
                              placeholder="Por defecto es: secret"
                              name="password" value="secret">
                          </div>

                          @if ($errors->has('password'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="col-sm-3">
                          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="password-confirm" 
                              placeholder="Por defecto es: secret" name="password_confirmation"
                              value="secret">
                              <small  class="form-text text-muted">La contraseña por defecto es <b class="text-danger">secret</b></small>
                          </div>                          
                    </div>

                </div>                                                                                        
                 
                <button class="btn btn-success">Registrar docente</button>
                <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Cancelar</a> 

             </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
