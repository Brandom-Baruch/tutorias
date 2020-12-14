@extends('layouts.app')

@section('titulo','Respuestas del Alumno')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')

@if(Auth::user()->materias()->where('name','like','%tutorias%')->get() && 
Auth::user()->puestos->where('puesto','Tutor')->first())
 @include('includes.links_tutor')
@endif
<a href="{{url('docente')}}">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">
			<div class="row">
				<div class="col-md-6 ml-auto mr-auto">
					<div class="profile">   						
						<div class="name">
							<h3 class="title">Respuestas del Padre <b class="text-primary">{{$entrevista->padres[0]->name}} {{$entrevista->padres[0]->apellidoP}}</b></h3>
						</div>
					</div>
				</div>
			</div>		
			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a>
				<a href="{{url('docente/entrevista_fresca_padre_familia/'.$entrevista->alumno_id)}}" class="btn btn-success">
					Descargar PDF
				</a> 
			</div><br>
			<h4 class="title text-center text-primary" style="margin-top: 10px;">Selecciona si su hijo(a) se relaciona con algunos de estos aspectos y el porcentaje de seguridad que tiene usted sobre ello.</h4>
			<!--Marca X-->
			<div class="row">										
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
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r1}}
							</td>															
							<td class="td-actions text-center">								
								{{$entrevista->marca_x->r1_2}}	
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r1_3}}
							</td>
						</tr>																					
						<!--2-->
						<tr>
							<td>PROBLEMAS CONDUCTUALES</td>	
							<td class="td-actions  text-center">
								{{$entrevista->marca_x->r2}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r2_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r2_3}}
							</td>
						</tr>
						<!--3-->
						<tr>
							<td>USO DE ALCOHOL</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r3}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r3_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r3_3}}
							</td>
						</tr>
						<!--4-->
						<tr>
							<td>USO DE DROGAS</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r4}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r4_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r4_3}}
							</td>
						</tr>
						<!--5-->
						<tr>
							<td>FUMA CIGARRILLOS</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r5}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r5_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r5_3}}
							</td>
						</tr>
						<!--6-->
						<tr>
							<td>ENFERMEDADES</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r6}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r6_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r6_3}}
							</td>
						</tr>
						<!--7-->
						<tr>
							<td>ALERGIAS</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r7}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r7_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r7_3}}
							</td>
						</tr>
						<!--8-->
						<tr>
							<td>BAJO TRATAMIENTO MÉDICO</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r8}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r8_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r8_3}}
							</td>
						</tr>
						<!--9-->
						<tr>
							<td>MALA NUTRICIÓN</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r9}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r9_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r9_3}}
							</td>
						</tr>
						<!--10-->
						<tr>
							<td>PROBLEMAS DE ATENCIÓN</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r10}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r10_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r10_3}}
							</td>
						</tr>
						<!--11-->
						<tr>
							<td>PROBLEMAS DE LENGUAJE</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r11}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r11_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r11_3}}
							</td>
						</tr>
						<!--12-->
						<tr>
							<td>REPETIDOR DE GRADO ESCOLAR</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r12}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r12_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r12_3}}
							</td>
						</tr>
						<!--13-->
						<tr>
							<td>AMISTADES SANAS</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r13}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r13_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r13_3}}
							</td>
						</tr>
						<!--14-->
						<tr>
							<td>ADICTO A LA  INTERNET</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r14}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r14_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r14_3}}
							</td>
						</tr>
						<!--15-->
						<tr>
							<td>ADICTO A LA TELEVISIÓN</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r15}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r15_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r15_3}}
							</td>
						</tr>
						<!--16-->
						<tr>
							<td>GUSTA DE ESTUDIAR Y ASISTIR A LA ESCUELA</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r16}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r16_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r16_3}}
							</td>
						</tr>
						<!--17-->
						<tr>
							<td>TRABAJA</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r17}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r17_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r17_3}}
							</td>
						</tr>
						<!--18-->
						<tr>
							<td>ES ORDENADO</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r18}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r18_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r18_3}}
							</td>
						</tr>
						<!--19-->
						<tr>
							<td>ES DISTRAÍDO</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r19}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r19_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r19_3}}
							</td>
						</tr>
						<!--20-->
						<tr>
							<td>USA LENTES</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r20}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r20_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r20_3}}
							</td>
						</tr>
						<!--21-->
						<tr>
							<td>OTROS</td>	
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r21}}
							</td>															
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r21_2}}
							</td>
							<td class="td-actions text-center">
								{{$entrevista->marca_x->r21_3}}
							</td>
						</tr>
					</tbody>
				</table>														
			</div><br>
			<!--Marca si no-->
			<h4 class="title text-center text-primary" style="margin-top: 10px;">Selecciona SI o NO en las características y cualidades que consideres que tiene o no su hijo (a)</h4>
			<div class="row">
				<table class="table-bordered  table table-responsive-sm table-responsive-md table-responsive-lg">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Características y Cualidades</th>								
							<th class="text-center">Si/No</th>
							<th class="text-center">#</th>
							<th class="text-center">Características y Cualidades</th>								
							<th class="text-center">Si/No</th>
						</tr>
					</thead>
					<tbody>
						<!--1/10-->
						<tr>
							<td class="text-center">1</td>
							<td class="text-center">ALEGRE</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta1}}
							</td>
							<td class="text-center">10</td>
							<td class="text-center">CARIÑOSO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta10}}
							</td>
						</tr>
						<!--2/11-->
						<tr>
							<td class="text-center">2</td>
							<td class="text-center">TRISTE</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta2}}
							</td>
							<td class="text-center">11</td>
							<td class="text-center">FRIO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta11}}
							</td>
						</tr>
						<!--3/12-->
						<tr>
							<td class="text-center">3</td>
							<td class="text-center">AGRESIVO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta3}}
							</td>
							<td class="text-center">12</td>
							<td class="text-center">OBEDIENTE</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta12}}
							</td>
						</tr>
						<!--4/13-->
						<tr>
							<td class="text-center">4</td>
							<td class="text-center">DOCIL</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta4}}
							</td>
							<td class="text-center">13</td>
							<td class="text-center">MENTIROSO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta13}}
							</td>
						</tr>
						<!--5/14-->
						<tr>
							<td class="text-center">5</td>
							<td class="text-center">TRANQUILO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta5}}
							</td>
							<td class="text-center">14</td>
							<td class="text-center">MEDIOSO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta14}}
							</td>
						</tr>
						<!--6/15-->
						<tr>
							<td class="text-center">6</td>
							<td class="text-center">INQUIETO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta6}}
							</td>
							<td class="text-center">15</td>
							<td class="text-center">VALIENTE</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta15}}
							</td>
						</tr>
						<!--7/16-->
						<tr>
							<td class="text-center">7</td>
							<td class="text-center">IMAGINATIVO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta7}}
							</td>
							<td class="text-center">16</td>
							<td class="text-center">DISTRAIDO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta16}}
							</td>
						</tr>
						<!--8/17-->
						<tr>
							<td class="text-center">8</td>
							<td class="text-center">REALISTA</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta8}}
							</td>
							<td class="text-center">17</td>
							<td class="text-center">ATENTO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta17}}
							</td>
						</tr>
						<!--9/18-->
						<tr>
							<td class="text-center">9</td>
							<td class="text-center">EXPRESIVO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta9}}
							</td>
							<td class="text-center">18</td>
							<td class="text-center">INTROVERTIDO</td>								
							<td class="td-actions text-center">
								{{$entrevista->marca_si_no->respuesta18}}
							</td>
						</tr>															
					</tbody>
				</table>

				<div class="form-group col-md-6">
					<label>Describa brevemente como es su hijo (a)</label>
					<input class="form-control" type="text" value="{{$entrevista->marca_si_no->respuesta19}}">
				</div>
				<div class="form-group col-md-6">
					<label>¿Con que persona considera usted que su hijo tiene más confianza?</label>
					<input class="form-control"  type="text"  value="{{$entrevista->marca_si_no->respuesta20}}">
				</div>
			</div>
			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a> 
				<a href="{{url('docente/entrevista_fresca_padre_familia/'.$entrevista->alumno_id)}}" class="btn btn-success">
					Descargar PDF
				</a>
			</div>
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
