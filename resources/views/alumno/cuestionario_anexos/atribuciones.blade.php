@extends('layouts.app')

@section('titulo','Atribuciones')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="margin-bottom: 30px;">Cuestionario: Atribuciones</h2>
			<h4 style="margin-bottom: 20px;" class="text-center">Selecciona respuesta que es más probable que sea cierta en las siguientes situaciones.</h4>			
			<form method="post" action="{{url('alumno/cuestionario/atribuciones')}}">
				{{ csrf_field() }}        												
				<div class="form-row" style="margin: auto;">
					<!--R2-->
					<div class="form-group col-md-4">
						<label style="color: black;"><b>Un estudiante te observa durante todo el recreo.</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="El estudiante quiere hablar contigo">
								El estudiante quiere hablar contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="El estudiante quiere pelear contigo">
								El estudiante quiere pelear contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="No le caes bien al estudiante">
								No le caes bien al estudiante.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="El estudiante tiene un problema contigo">
								El estudiante tiene un problema contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
					</div>
					<!--R6-->															
					<div class="form-group col-md-4">
						<label style="color: black;"><b>Alguien escribió algo negativo de ti en el pizarrón.</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="Alguien está tratando de hacerte daño">
								Alguien está tratando de hacerte daño.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="No sabes qué pensar">
								No sabes qué pensar.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="Alguien te tiene envidia">
								Alguien te tiene envidia.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="Alguien quiere afectar tu reputación">
								Alguien quiere afectar tu reputación.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
					</div>	
					<!--R4-->
					<div class="form-group col-md-4">
						<label style="color: black; text-align: justify;"><b>Un amigo te grita cuando intentas consolarlo por el divorcio de sus padres.</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Tu amigo es mala onda">
								Tu amigo es mala onda.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Tu amigo no quiere tu ayuda">
								Tu amigo no quiere tu ayuda.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Tu amigo está molesto por el divorcio de sus padres">
								Tu amigo está molesto por el divorcio de sus padres.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Tu amigo es muy enojón">
								Tu amigo es muy enojón.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
					</div>	
					<!--R1-->					
					<div class="form-group col-md-6">
						<label style="color: black;"><b>Tu maestra(o) califica tus tareas con más comentarios que los de tus amigos.</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="A tu maestra(o) le caen mejor tus amigos que tú">
								A tu maestra(o) le caen mejor tus amigos que tú.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Tu maestra(o) cree que no te esfuerzas lo suficiente">
								Tu maestra(o) cree que no te esfuerzas lo suficiente.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Tu maestra cree que puedes mejorar">
								Tu maestra cree que puedes mejorar. 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Tu maestra cree que te desempeñas muy mal">
								Tu maestra cree que te desempeñas muy mal.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
					</div>														
					<!--R5-->
					<div class="form-group col-md-6">
						<label style="color: black;"><b>Tu amigo(a) quiere llamar la atención de un(a) compañera (compañero).</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Tu amigo(a) quiere estar con él(ella) en lugar de contigo">
								Tu amigo(a) quiere estar con él(ella) en lugar de contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Tu amigo(a) está cansado(a) de ti">
								Tu amigo(a) está cansado(a) de ti.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Tu amigo(a) no es confiable y no es un amigo(a) de verdad">
								Tu amigo(a) no es confiable y no es un amigo(a) de verdad.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Tu amigo(a) simplemente quiere ampliar su círculo de amigos">
								Tu amigo(a) simplemente quiere ampliar su círculo de amigos.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
					</div>														
					<!--R7-->
					<div class="form-group col-md-6">
						<label style="color: black;"><b>Te llaman a la oficina del director después de que fuiste testigo de una pelea en el pasillo.</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="El director cree que fuiste parte de la pelea">
								El director cree que fuiste parte de la pelea.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="El director cree que eres culpable por haber observado">
								El director cree que eres culpable por haber observado.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="El director quiere escuchar lo que tienes que decir">
								El director quiere escuchar lo que tienes que decir.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="El director está enojado y quiere sermonear a todos los que estuvieron ahí">
								El director está enojado y quiere sermonear a todos los que estuvieron ahí.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
					</div>	
					<!--R3-->
					<div class="form-group col-md-6">
						<label style="color: black;"><b>A un amigo tuyo lo escogen para ser parte de un equipo que participará en un concurso académico y ya no tiene tanto tiempo para estar contigo.</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Tu amigo ya no quiere hacer cosas contigo">
								Tu amigo ya no quiere hacer cosas contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Tu amigo está muy ocupado o cansado para hacer cosas contigo">
								Tu amigo está muy ocupado o cansado para hacer cosas contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Tu amigo prefiere estar con sus nuevos compañeros de equipo">
								Tu amigo prefiere estar con sus nuevos compañeros de equipo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="A tu amigo no le interesa mucho tu amistad">
								A tu amigo no le interesa mucho tu amistad.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
					</div>	
				</div>																							
				<div class="text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/alumno/cuestionario')}}" class="btn btn-danger">Cancelar</a> 
				</div>
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
