@extends('layouts.app')

@section('titulo','Datos Adicionales')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="color: black; margin-top: 10px;">Datos Adicionales</h2>
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
			<form method="post" action="{{url('alumno/entrevista/datos/adicionales')}}">
				{{ csrf_field() }}        												
				<div class="form-row">
					<div class="form-group col-md-3"><!--R1-->
						<label style="color: black;"><b>¿Consideras que tienes alguna capacidad diferente?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Cuál?</label>
								<input type="text" class="form-control text-dark" name="r1">
							</div>
						</div>
					</div>
					<div class="form-group col-md-3"><!--R2-->
						<label style="color: black;"><b>¿Padeces alguna enfermedad?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Cuál?</label>
								<input type="text" class="form-control text-dark" name="r2">
							</div>
						</div>
					</div>
					<div class="form-group col-md-3"><!--R4-->
						<label style="color: black;"><b>¿Te han intervenido quirúrgicamente?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Cuál?</label>
								<input type="text" class="form-control text-dark" name="r4">
							</div>
						</div>
					</div>	
					<div class="form-group col-md-3"><!--R5-->
						<label style="color: black;"><b>¿Te ha llamado la atención probar alguna droga?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Cuál?</label>
								<input type="text" class="form-control text-dark" name="r5">
							</div>
						</div>
					</div>
					<div class="form-group col-md-3"><!--R6-->
						<label style="color: black;"><b>¿Tienes acceso a una computadora portátil o de escritorio en casa?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>												
					</div>
					<div class="form-group col-md-3"><!--R7-->
						<label style="color: black;"><b>¿Tienes acceso a internet en casa?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>												
					</div>	
					<div class="form-group col-md-3"><!--R8-->
						<label style="color: black;"><b>¿Tienes celular propio?</b></label><br>
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
					</div>	
					<div class="form-group col-md-3"><!--R9-->
						<label style="color: black;"><b>¿Cuántas horas al día haces uso del tu celular?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="Menos de 2 hrs" >
								Menos de 2 hrs 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="De 2 a 4 hrs" >
								De 2 a 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="Más de 4 hrs" >
								Más de 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>												
					</div>
					<div class="form-group col-md-3"><!--R10-->
						<label style="color: black;"><b>¿Cuántas horas al día ves televisión en tu casa?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta10" value="Menos de 2 hrs" >
								Menos de 2 hrs 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta10" value="De 2 a 4 hrs" >
								De 2 a 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta10" value="Más de 4 hrs" >
								Más de 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>												
					</div>
					<div class="form-group col-md-3"><!--R11-->
						<label style="color: black;"><b>¿Cuántas horas al día haces uso de videojuegos?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta11" value="Menos de 2 hrs" >
								Menos de 2 hrs 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta11" value="De 2 a 4 hrs" >
								De 2 a 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta11" value="Más de 4 hrs" >
								Más de 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>												
					</div>
					<div class="form-group col-md-3"><!--R12-->
						<label style="color: black;"><b>¿A qué hora te levantas para venir a la escuela?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta12" value="5:30 am" >
								5:30 am 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta12" value="6:00am" >
								6:00am
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta12" value="6:30 am" >
								6:30 am
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta12" value="7:00 am" >
								7:00 am
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta12" value="7:30 am" >
								7:30 am
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>											
					</div>
					<div class="form-group col-md-3"><!--R13-->
						<label style="color: black;"><b>¿A qué hora te duermes entre semana?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta13" value="Entre 9 y 10 pm" >
								Entre 9 y 10 pm 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta13" value="Entre 11 y 12 pm" >
								Entre 11 y 12 pm
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta13" value="Entre 12 y 1 am" >
								Entre 12 y 1 am
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta13" value="Más de la 1" >
								Más de la 1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>																	
					</div>
					<div class="form-group col-md-3"><!--R14-->
						<label style="color: black;"><b>¿Consideras que tu horario de alimentación es el correcto?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta15" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta15" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Por qué?</label>
								<input type="text" class="form-control text-dark" name="r15">
							</div>
						</div>																					
					</div>
					<div class="form-group col-md-3"><!--R15-->
						<label style="color: black;"><b>¿Se te dificulta conciliar el sueño?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta14" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta14" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Por qué?</label>
								<input type="text" class="form-control text-dark" name="r14">
							</div>
						</div>																					
					</div>
					<div class="form-group col-md-3"><!--R16-->
						<label style="color: black;"><b>¿Qué responsabilidades tienes dentro de casa?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta16" value="Lavar trastes" >
								Lavar trastes 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta16" value="Limpiar mi cuarto" >
								Limpiar mi cuarto
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta16" value="Hacer de comer" >
								Hacer de comer
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta16" value="Comer" >
								Comer
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Otros?</label>
								<input type="text" class="form-control text-dark" placeholder="¿Cuales?" name="r16">
							</div>
						</div>																					
					</div>
					<div class="form-group col-md-3"><!--R17-->
						<label style="color: black;"><b>¿Cuentas con algún trabajo después de la escuela?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta17" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta17" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">Cuál?</label>
								<input type="text" class="form-control text-dark"  name="r17">
							</div>
						</div>																					
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Horario?</label>
								<input type="text" class="form-control text-dark"  name="r17_2">
							</div>
						</div>																					
					</div>						
					<div class="form-group col-md-4"><!--R18-->
						<label style="color: black;"><b>¿A qué persona le tienes confianza?</b></label><br>
						<div class="form-check">
							<div class="form-check col-md-10">								
								<input type="text" class="form-control text-dark"  name="respuesta18">
							</div>
						</div>																					
					</div>
					<div class="form-group col-md-4"><!--R19-->
						<label style="color: black;"><b>¿A 	que persona le cuentas tus problemas?</b></label><br>
						<div class="form-check">
							<div class="form-check col-md-10">								
								<input type="text" class="form-control text-dark"  name="respuesta19">
							</div>
						</div>																					
					</div>
					<div class="form-group col-md-4"><!--R3-->
						<label style="color: black;"><b>¿Te encuentras bajo tratamiento médico?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="No" >
								No 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-9">
								<label style="color: black;">¿Cuál?</label>
								<input type="text" class="form-control text-dark" name="r3">								
							</div>
							<div class="form-check col-md-9">							
								<label style="color: black;">Horario</label>
								<input type="text" class="form-control text-dark" name="r3_2">								
							</div>
						</div>
					</div>
					<h3>Marca SI o NO en las características y cualidades que consideres que tienes o no como persona</h3>	
					<table class="table table-responsive-sm table-responsive-md table-responsive-lg">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Características y Cualidades</th>								
								<th class="text-center">Si o No</th>
								<th class="text-center">#</th>
								<th class="text-center">Características y Cualidades</th>								
								<th class="text-center">Si o No</th>
							</tr>
						</thead>
						<tbody>
							<!--1/10-->
							<tr>
								<td class="text-center">1</td>
								<td class="text-center">ALEGRE</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_1">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_1">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="text-center">10</td>
								<td class="text-center">CARIÑOSO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_10">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_10">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
							</tr>
							<!--2/11-->
							<tr>
								<td class="text-center">2</td>
								<td class="text-center">TRISTE</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_2">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_2">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="text-center">11</td>
								<td class="text-center">FRIO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_11">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_11">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
							</tr>
							<!--3/12-->
							<tr>
								<td class="text-center">3</td>
								<td class="text-center">AGRESIVO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_3">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_3">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="text-center">12</td>
								<td class="text-center">OBEDIENTE</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_12">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_12">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
							</tr>
							<!--4/13-->
							<tr>
								<td class="text-center">4</td>
								<td class="text-center">DOCIL</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_4">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_4">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="text-center">13</td>
								<td class="text-center">MENTIROSO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_13">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_13">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
							</tr>
							<!--5/14-->
							<tr>
								<td class="text-center">5</td>
								<td class="text-center">TRANQUILO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_5">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_5">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="text-center">14</td>
								<td class="text-center">MEDIOSO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_14">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_14">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
							</tr>
							<!--6/15-->
							<tr>
								<td class="text-center">6</td>
								<td class="text-center">INQUIETO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_6">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_6">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="text-center">15</td>
								<td class="text-center">VALIENTE</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_15">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_15">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
							</tr>
							<!--7/16-->
							<tr>
								<td class="text-center">7</td>
								<td class="text-center">IMAGINATIVO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_7">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_7">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="text-center">16</td>
								<td class="text-center">DISTRAIDO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_16">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_16">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
							</tr>
							<!--8/17-->
							<tr>
								<td class="text-center">8</td>
								<td class="text-center">REALISTA</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_8">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_8">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="text-center">17</td>
								<td class="text-center">ATENTO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_17">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_17">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
							</tr>
							<!--9/18-->
							<tr>
								<td class="text-center">9</td>
								<td class="text-center">EXPRESIVO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_9">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_9">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="text-center">18</td>
								<td class="text-center">INTROVERTIDO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20_18">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20_18">
												No
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
				<button class="btn btn-success">Finalizar</button>
				<a href="{{url('/alumno/entrevista')}}" class="btn btn-danger">Cancelar</a> 
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
