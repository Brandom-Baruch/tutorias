@extends('layouts.app')

@section('titulo','Caracteristicas y cualidades')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_padre')
<a href="{{url('/padre_familia')}}" class="dropdown-item">Panel de control</a>
@endsection


@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h3 class="title text-center" style="margin-top: 10px;">Selecciona SI o NO en las características y cualidades que consideres que tiene o no su hijo (a)</h3>
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
			<form method="post" action="{{url('/padre_familia/entrevista/'.$alumno->nia.'/marca_si_no')}}">
				{{ csrf_field() }}        									
				<div class="row">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta1">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta1">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta10">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta10">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta2">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta2">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta11">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta11">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta3">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta3">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta12">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta12">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta4">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta4">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta13">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta13">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta5">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta5">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta14">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta14">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta6">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta6">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta15">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta15">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta7">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta7">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta16">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta16">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta8">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta8">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta17">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta17">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta9">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta9">
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
												<input class="form-check-input" type="radio" value="Si" name="respuesta18">
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta18">
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
					<div class="form-group col-md-6">
						<label>Describa brevemente como es su hijo (a)</label>
						<textarea class="form-control" name="respuesta19" rows="1">{{old('respuesta19')}}</textarea>
					</div>
					<div class="form-group col-md-6">
						<label>¿Con que persona considera usted que su hijo tiene más confianza?</label>
						<textarea class="form-control"  name="respuesta20"  rows="1">{{old('respuesta20')}}</textarea>
					</div>
				</div>
				<div class="text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/padre_familia/entrevista/'.$alumno->nia.'/secciones')}}" class="btn btn-danger">Cancelar</a> 
				</div>				
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
