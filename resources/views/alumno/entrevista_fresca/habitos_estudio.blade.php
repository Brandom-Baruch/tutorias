@extends('layouts.app')

@section('titulo','Habitos de Estudio')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="color: black;">Habitos de Estudio</h2>
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
			<form method="post" action="{{url('alumno/entrevista/habitos/estudio')}}">
				{{ csrf_field() }}        												
				<div class="form-row">
					<div class="form-group col-md-6">
						<label style="color: black;"><b>¿Qué tiempo dedicas diariamente, después de la escuela (en tu casa) para las TAREAS?</b></label><br>						
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Nada" >
								Nada 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Una hora" >
								Una hora 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Dos horas" >
								Dos horas 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Mas de dos horas" >
								Mas de dos horas 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>
					<div class="form-group col-md-6">
						<label style="color: black;"><b>¿Qué tiempo dedicas diariamente, después de la escuela (en tu casa) para ESTUDIAR?</b></label><br>						
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Nada" >
								Nada 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Una hora" >
								Una hora 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Dos horas" >
								Dos horas 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Mas de dos horas" >
								Mas de dos horas 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>					
					<div class="form-group col-md-6">
						<label style="color: black;"><b>¿Qué tiempo a la semana dedicas a leer?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Una hora" >
								Una hora 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="De 2 a 3 hrs">
								De 2 a 3 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="De 4 a 6 hrs">
								De 4 a 6 hrs  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
					</div>	
					<div class="form-group col-md-6">
						<label style="color: black;"><b>¿Cuál es tu horario preferido para estudiar?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Después de comer " >
								Después de comer  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Mas tarde" >
								Mas tarde
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Noche" >
								Noche
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>									
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Quién te ayuda a estudiar en casa?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Nadie" >
								Nadie  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Papá" >
								Papá
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Mamá" >
								Mamá
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Hermanos" >
								Hermanos
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<div class="form-check col-md-8">
								<label style="color: black;">Otros</label>
								<input type="text" class="form-control text-dark" name="r5">
							</div>
						</div>									
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿En qué lugar prefieres estudiar?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="En tu habitación" >
								En tu habitación  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="Sala" >
								Sala
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="Cocina" >
								Cocina
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>							
						<div class="form-check">
							<div class="form-check col-md-8">
								<label style="color: black;">Otros</label>
								<input type="text" class="form-control text-dark" name="r6">
							</div>
						</div>									
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Qué técnicas de estudio usas?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Subrayar" >
								Subrayar  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Esquemas" >
								Esquemas
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Resumen" >
								Resumen
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Memoria" >
								Memoria
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Ninguno" >
								Ninguno
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-8">
								<label style="color: black;">Otros</label>
								<input type="text" class="form-control text-dark" name="r7">
							</div>
						</div>									
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Tus papas o hermanos te motivan a estudiar?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta8" value="Si" >
								Si  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta8" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>																		
						<div class="form-check">
							<div class="form-check col-md-8">
								<label style="color: black;">¿Cómo?</label>
								<input type="text" class="form-control text-dark" name="r8">
							</div>
						</div>									
					</div>		
					<h3>Marca con una X el motivo principal que tienes para seguir estudiando</h3>	
					<table class="table table-responsive-sm table-responsive-md table-responsive-lg">
						<thead>
							<tr>
								<th class="text-center">ASPECTOS</th>								
								<th class="text-center">OPCIONES</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">Aprender cada dia mas</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_1">
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_1">
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_1">
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-left">Poder hacer las cosas por ti mismo y a tu manera</td>		
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_2">
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_2">
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_2">
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
									</div>												
								</td>
							</tr>
							<tr>
								<td class="text-left">El interés de despertar en ti todo lo que estudias</td>		
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_3">
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_3">
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_3">
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-left">La satisfacción por obtener buenos resultados</td>	
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_4">
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_4">
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_4">
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
									</div>												
								</td>
							</tr>
							<tr>
								<td class="text-left">Evitar el fracaso en los estudios</td>	
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_5">
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_5">
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_5">
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>						
									</div>												
								</td>
							</tr>
							<tr>
								<td class="text-left">Agradar a tus padres y/o profesores</td>	
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_6">
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_6">
												REGULAR 
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_6">
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>						
									</div>												
								</td>
							</tr>
							<tr>
								<td class="text-left">Obtener premios por parte de tus padres o familia</td>	
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_7">
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_7">
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_7">
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>															
				</div>																							
				<button class="btn btn-primary">Finalizar</button>
				<a href="{{url('/alumno/entrevista')}}" class="btn btn-danger">Cancelar</a> 
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
