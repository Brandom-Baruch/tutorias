@extends('layouts.app')

@section('titulo','Editar Padre de familia')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_padre')
<a href="{{url('/padre_familia')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">
			<h2 class="title text-center" style="color:black;">
				Editando al señor(a) <b class="text-primary">{{Auth::user()->name}}</b>
			</h2>
			<form method="post" action="{{url('padre_familia/'.Auth::user()->id.'/edit')}}">
				{{ csrf_field() }}
				<div class="row">            
					<div class="col-sm-3">
						<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
							<label>Nombre(s)</label>
							<input type="text" class="form-control"  							
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
							value="{{ old('apellidoM', Auth::user()->apellidoM) }}"
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
							value="{{ old('edad', Auth::user()->edad) }}"
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
							value="{{ old('telefono_cel', Auth::user()->telefono_cel) }}"
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
							value="{{ old('curp', Auth::user()->curp) }}" 
							name="curp" style="text-transform: uppercase;">
						</div>
						@if ($errors->has('curp'))
						<span class="help-block text-center text-danger">
							<strong>{{ $errors->first('curp') }}</strong>
						</span>
						@endif
					</div>
					<div class="col-sm-2">                          
						<div class="form-group">          
							<label>Estado Civil</label>
							<select class="form-control " name="estado_civil" >
								<option value="Casado(a)"
								@if(Auth::user()->estado_civil == 'Casado(a)')  selected @endif>
								Casado(a)
								</option>
								<option value="Soltero(a)"
									@if(Auth::user()->estado_civil == 'Soltero(a)')  selected @endif>
									Soltero(a)
								</option>                                
							</select>
						</div>                          
					</div>
					<div class="col-sm-2">                          
						<div class="form-group{{ $errors->has('escolaridad') ? ' has-error' : '' }}">          
							<label>Escolaridad</label>
							<select class="form-control " name="escolaridad" >
								<option value="Primaria"
								@if(Auth::user()->escolaridad == 'Primaria')  selected @endif>
								Primaria
								</option>
								<option value="Secundaria"
									@if(Auth::user()->escolaridad == 'Secundaria')  selected @endif>
									Secundaria
								</option>
								<option value="Preparatoria"
									@if(Auth::user()->escolaridad == 'Preparatoria')  selected @endif>
									Preparatoria
								</option>
								<option value="Universidad"
									@if(Auth::user()->escolaridad == 'Universidad')  selected @endif>
									Universidad
								</option>
							</select>
						</div>                        
					</div>
					<div class="col-sm-3">
						<div class="form-group {{ $errors->has('ocupacion') ? ' has-error' : '' }}">
							<label>Ocupación</label>
							<input type="text" class="form-control" 							
							value="{{ old('ocupacion', Auth::user()->ocupacion) }}"
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
							value="{{ old('profesion', Auth::user()->profesion) }}"
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
							value="{{ old('email', Auth::user()->email) }}"
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
							name="password_confirmation"
							value="secret">
							<small  class="form-text text-muted">La contraseña por defecto es <b class="text-danger">secret</b>
							</small>
						</div>                          
					</div>
					</div>                                                                                        
					<button class="btn btn-edit">Registrar docente</button>
					<a href="{{url('padre_familia')}}" class="btn btn-danger">Cancelar</a> 
				</div>
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
