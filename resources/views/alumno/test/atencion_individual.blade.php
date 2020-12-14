@extends('layouts.app')

@section('titulo','Atención Individual')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h3 class="title text-center">
				Test para detectar tutorados que requieran atención indivualizada
			</h3>
			<form method="post" action="{{url('alumno/test/atencion_individual')}}">		
				{{csrf_field()}}		
				<div class="row">
					<div class="col-md-6">
						<label class="text-dark">Nombre del Tutor</label>
					    <select class="form-control" name="docente_name">
					    	@foreach($materias as $materias)
					    		@foreach($materias->docentes as $docente)
					        	<option value="{{$docente->name}} {{$docente->apellidoP}} {{$docente->apellidoM}}">
					        		{{$docente->name}} {{$docente->apellidoP}} {{$docente->apellidoM}}</option>				        
					        	@endforeach	
					        @endforeach
					    </select>
					</div>
					<div class="col-md-6">
						<label class="mb-4 text-dark">Grupo</label><br>
						<span>{{Auth::user()->grupo->name}} {{Auth::user()->grupo->grado}} {{Auth::user()->grupo->grupo}}</span>
						<input type="hidden" name="grupo" value="{{Auth::user()->grupo->name}} {{Auth::user()->grupo->grado}} {{Auth::user()->grupo->grupo}}">
					</div>
				</div>
				<h4 class="text-center">Por favor marca las situaciones que actualmente se presentan en tu vida cotidiana. Tu honestidad permitirá un mejor trabajo.</h4><br>						
				<table class="table table-bordered" style="margin: auto;">
					<thead>
						<tr class="text-center">
							<th scope="col" style="width: 10%">FACTORES</th>
							<th scope="col" style="width: 50%">SITUACIONES</th>
							<th scope="col" style="width: 2%"></th>							
						</tr>
					</thead>
					<!--Salud y peso-->
					<tr>
						<td rowspan="7"  class="text-center" style="padding-top: 13%; font-size: 20px;">Salud y peso</td>
						<td>Presentas deficiencia visual y auditiva</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta1" value="Si">							
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Presentas desnutrición</td>
						<td><div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta2" 
									value="Si">							
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Tienes obesidad (más de 10 kilos arriba de tu peso)</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta3" value="Si">		
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Tienes problemas de anorexia</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta4" value="Si">				
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Tienes problemas de bulimia</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta5" value="Si">					
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Eres sexualmente activo</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta6" 
									value="Si">							
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Has tenido enfermedades sexualmente transmisibles (ETS)</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta7" value="Si">			
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<!--Fin Salud y peso-->					
					<!--Académicos -->
					<tr>
						<td rowspan="4"  class="text-center" style="padding-top: 8%; font-size: 20px;">Académicos</td>
						<td>Sientes apatía hacia el estudio</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta8" value="Si">				
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Presentan deficiencia en la comprensión lectora</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta9" value="Si">				
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Te faltan técnicas de estudio</td>
						<td><div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta10" value="Si">			
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Tienes ideas claras sobre que harás en el futuro</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta11" value="Si">				
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<!--Fin Académicos -->
					<!--Psicosocial -->
					<tr>
						<td rowspan="6"  class="text-center" style="padding-top: 10%; font-size: 20px;">Psicosocial</td>
						<td>Tienes problemas para expresar tu afecto</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta12" value="Si">				
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Te consideras una persona violenta</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta13" value="Si">				
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Tienes problemas de depresión</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta14" value="Si">			
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Puedes presentar problemas de ansiedad, nerviosismo o angustia sin motivos aparentes</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta15" value="Si">			
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Fumas</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta16" 
									value="Si">							
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Tomas</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta17" 
									value="Si">							
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<!--Fin Psicosocial-->
					<!--Familiar -->
					<tr>
						<td rowspan="3"  class="text-center" style="padding-top: 5%; font-size: 20px;">Familiar</td>
						<td>Hay violencia familiar</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta18" 
									value="Si">							
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Falta comunicación entre tú y tus padres</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta19" value="Si">			
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Pasas mucho tiempo solo en tu casa</td>
						<td>
							<div class="form-check text-center" style="margin-top:-10px; ">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="respuesta20" value="Si">			
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</td>
					</tr>
					<!--Fin Familiar -->
				</table><br>
				<div class="form-group">
				    <label class="text-dark">Si lo necesitas, en las siguientes líneas escribe que otra problemática tienes que no se mencione en el listado anterior.</label>
				    <textarea class="form-control" rows="2" name="respuesta21"></textarea>
				</div>
				<div class="text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/alumno/encuestas')}}" class="btn btn-danger">Regresar</a>
				</div>
			</form>              
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
