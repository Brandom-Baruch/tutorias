@extends('layouts.app')

@section('titulo','Datos Adicionales')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_padre')
<a href="{{url('/padre_familia')}}" class="dropdown-item">Panel de control</a>
@endsection


@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h3 class="title text-center" style="margin-top: 10px;">Selecciona si su hijo(a) se relaciona con algunos de estos aspectos y el porcentaje de seguridad que tiene usted sobre ello.</h3>
			@if($errors->any())
			<div class="alert alert-danger">
				<div class="container-fluid">                     
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"><i class="material-icons">clear</i></span>
					</button>
					<ul>    
						@foreach($errors->all() as $error)                        
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endif			
			<form method="post" action="{{url('padre_familia/entrevista/'.$alumno->nia.'/marca_x')}}">
				{{ csrf_field() }}        	
				<input type="hidden" name="alumno_id" value="{{$alumno->nia}}">
				<div class="form-row">										
					<table class="table-bordered table table-responsive-sm table-responsive-md table-responsive-lg">
						<thead>
							<tr>
								<th class="text-center">Aspectos</th>												
								<th class="text-center">Si/No</th>
								<th class="text-center">Conocimiento y certeza que se tiene sobre ello</th>
								<th class="text-center">Especifique el caso</th>								
							</tr>
						</thead>
						<tbody>
							<!--1-->
							<tr>
								<td>ACCIDENTES</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r1">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r1">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r1_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r1_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r1_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r1_3"></textarea>     
									</div>
								</td>
							</tr>																					
							<!--2-->
							<tr>
								<td>PROBLEMAS CONDUCTUALES</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r2">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r2">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r2_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r2_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r2_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r2_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--3-->
							<tr>
								<td>USO DE ALCOHOL</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r3">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r3">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r3_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r3_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r3_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r3_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--4-->
							<tr>
								<td>USO DE DROGAS</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r4">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r4">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r4_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r4_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r4_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r4_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--5-->
							<tr>
								<td>FUMA CIGARRILLOS</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r5">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r5">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r5_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r5_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r5_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r5_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--6-->
							<tr>
								<td>ENFERMEDADES</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r6">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r6">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r6_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r6_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r6_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r6_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--7-->
							<tr>
								<td>ALERGIAS</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r7">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r7">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r7_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r7_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r7_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r7_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--8-->
							<tr>
								<td>BAJO TRATAMIENTO MÉDICO</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r8">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r8">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r8_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r8_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r8_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r8_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--9-->
							<tr>
								<td>MALA NUTRICIÓN</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r9">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r9">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r9_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r9_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r9_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r9_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--10-->
							<tr>
								<td>PROBLEMAS DE ATENCIÓN</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r10">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r10">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r10_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r10_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r10_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r10_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--11-->
							<tr>
								<td>PROBLEMAS DE LENGUAJE</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r11">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r11">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r11_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r11_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r11_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r11_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--12-->
							<tr>
								<td>REPETIDOR DE GRADO ESCOLAR</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r12">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r12">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r12_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r12_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r12_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r12_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--13-->
							<tr>
								<td>AMISTADES SANAS</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r13">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r13">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r13_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r13_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r13_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r13_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--14-->
							<tr>
								<td>ADICTO A LA  INTERNET</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r14">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r14">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r14_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r14_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r14_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r14_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--15-->
							<tr>
								<td>ADICTO A LA TELEVISIÓN</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r15">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r15">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r15_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r15_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r15_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r15_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--16-->
							<tr>
								<td>GUSTA DE ESTUDIAR Y ASISTIR A LA ESCUELA</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r16">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r16">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r16_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r16_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r16_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r16_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--17-->
							<tr>
								<td>TRABAJA</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r17">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r17">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r17_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r17_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r17_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r17_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--18-->
							<tr>
								<td>ES ORDENADO</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r18">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r18">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r18_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r18_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r18_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r18_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--19-->
							<tr>
								<td>ES DISTRAÍDO</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r19">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r19">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r19_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r19_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r19_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r19_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--20-->
							<tr>
								<td>USA LENTES</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r20_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r20_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r20_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r20_3"></textarea>     
									</div>
								</td>
							</tr>
							<!--20-->
							<tr>
								<td>OTROS</td>	
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r21">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r21">
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>															
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r21_2">
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r21_2">
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r21_2">
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div>
								</td>
								<td class="td-actions text-center text-center">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r21_3"></textarea>     
									</div>
								</td>
							</tr>
						</tbody>
					</table>														
				</div>																							
				<div class="text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/padre_familia/entrevista/')}}" class="btn btn-danger">Cancelar</a> 
				</div>
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
