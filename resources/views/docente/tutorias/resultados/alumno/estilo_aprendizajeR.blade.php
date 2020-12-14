@extends('layouts.app')

@section('titulo','Estilos de Aprendizaje')

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
							<h3 class="title">
								Respuestas del test "Estilos de Aprendizaje" del Alumno 
								<b class="text-primary">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</b>
							</h3>		
						</div>
					</div>
				</div>
			</div>		
			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a>
				<a href="{{url('docente/estilos_aprendizaje/'.$test->alumno_id)}}" class="btn btn-success">
					Descargar Pdf
				</a> 
			</div>
			<h4 class="title text-primary">Conociendo los estilos de aprendizaje de los tutorados</h4>	
			<h4 style="margin-bottom: 20px;" class="text-justify"><b>Instrucciones:</b> Lee con atención el siguiente cuestionario y marca en las columnas de la derecha el número que corresponda a tu respuesta, de acuerdo con la siguiente escala:</h4>
			<div class="table-responsive">
				<table class="table table-borderless" style="width: 500px; margin: auto; margin-bottom: 20px;">				
					<tbody>
						<tr>						
							<td class="text-center">NUNCA<br>1</td>
							<td class="text-center">RARA VEZ <br>2</td>
							<td class="text-center">A VECES <br>3</td>
							<td class="text-center">CASI SIEMPRE <br>4</td>
							<td class="text-center">SIEMPRE <br>5</td>
						</tr>						
					</tbody>
				</table>				
			</div>
			<div class="row">
				<table class="table table-bordered ">				
						<tbody>
							<!--R1-->
							<tr>							
								<td>1. Tomo muchas notas y me gusta garabatear mientras escucho una clase o conferencia.</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta1 }}	
								</td>							
							</tr>
							<!--R2-->
							<tr>
								<td>2. Cuando leo, lo hago en voz alta o muevo los labios para escuchar las palabras de mi mente.</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta2 }}
								</td>						
							</tr>
							<!--R3-->
							<tr>
								<td>3. Prefiero actuar directamente, probando lo que tengo que hacer, en vez de seguir instrucciones <br>dadas por alguien.</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta3 }}
								</td>							
							</tr>
							<!--R4-->
							<tr>
								<td>4. Se me dificulta conversar con alguien que no me mire a los ojos.</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta4 }}	
								</td>							
							</tr>
							<!--R5-->
							<tr>
								<td>5. Se me dificulta platicar con alguien que permanece frío o indiferente.</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta5 }}
								</td>							
							</tr>
							<!--R6-->
							<tr>
								<td>6. Se me dificulta platicar con alguien que permanece en silencio sin responderme.</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta6 }}	
								</td>							
							</tr>
							<!--R7-->
							<tr>
								<td>7. Escribo listas de lo que tengo que hacer para recordar mejor.</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta7 }}	
								</td>							
							</tr>
							<!--R8-->
							<tr>
								<td>8. Aunque no tome notas porque me distraigo, puedo recordar lo que alguien haya <br>dicho en clase o conferencia.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta8 }}	
								</td>							
							</tr>
							<!--R9-->
							<tr>
								<td>9. Cuando leo una novela, pongo mucha atención a los pasajes <br>que describen detalles de vestuario, lugares, etc.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta9 }}
								</td>							
							</tr>
							<!--R10-->
							<tr>
								<td>10. Cuando leo una novela me concentro en los diálogos y conversaciones entre los personajes.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta10 }}
								</td>							
							</tr>
							<!--R11-->
							<tr>
								<td>11. Tomo notas y apuntes de clase, pero raramente los vuelvo a consultar.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta11 }}
								</td>							
							</tr>
							<!--R12-->
							<tr>
								<td>12. Necesito escribir las instrucciones para poder seguirlas en orden.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta12 }}	
								</td>							
							</tr>
							<!--R13-->
							<tr>
								<td>13. Me gusta pensar en voz alta cuando escribo o resuelvo problemas.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta13 }}	
								</td>							
							</tr>
							<!--R14-->
							<tr>
								<td>14. Cuando elijo qué leer, prefiero novelas, cuentos o relatos de acción,<br> en los que se plasme el drama y el sentimiento entre los personajes.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta14 }}
								</td>							
							</tr>
							<!--R15-->
							<tr>
								<td>15. Puedo comprender lo que alguien dice, aun sin observar sus gestos al hablar.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta15 }}
								</td>							
							</tr>
							<!--R16-->
							<tr>
								<td>16. Necesito observar a la persona con la que platico para poder mantener la <br>atención en el tema de conversación.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta16 }}
								</td>							
							</tr>
							<!--R17-->
							<tr>
								<td>17. Recuerdo mejor las cosas cuando las digo otra vez.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta17 }}
								</td>							
							</tr>
							<!--R18-->
							<tr>
								<td>18. Cuando conozco por primera vez a una persona, me fijo en sus rasgos <br>faciales y en su apariencia.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta18 }}	
								</td>							
							</tr>
							<!--R19-->
							<tr>
								<td>19. Cuando leo en silencio, muevo los labios al ritmo de la lectura.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta19 }}
								</td>							
							</tr>
							<!--R20-->
							<tr>
								<td>20. Me gusta profundizar en temas interesantes cuando me encuentro <br>con alguien dispuesto a conversar.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta20 }}
								</td>							
							</tr>
							<!--R21-->
							<tr>
								<td>21. Cuando estoy en una fiesta o reunión, me gusta sentarme y observar a la gente.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta21 }}
								</td>							
							</tr>
							<!--R22-->
							<tr>
								<td>22. Cuando platico sobre algo, hago ademanes y gestos para enfatizar.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta22 }}	
								</td>							
							</tr>
							<!--R23-->
							<tr>
								<td>23. Cuando recuerdo algún hecho, puedo verlo mentalmente, con detalles de dónde y cómo lo vi.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta23 }}
								</td>							
							</tr>
							<!--R24-->
							<tr>
								<td>24. Prefiero escuchar noticias en la radio que leer el periódico.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta24 }}	
								</td>							
							</tr>
							<!--R25-->
							<tr>
								<td>25. Mi escritorio y lugar de estudio lucen desordenados.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta25 }}
								</td>							
							</tr>
							<!--R26-->
							<tr>
								<td>26. Cuando asisto a una fiesta o reunión, me gusta involucrarme en <br>ella (bailar, jugar..) en vez de permanecer al margen.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta26 }}	
								</td>							
							</tr>
							<!--R27-->
							<tr>
								<td>27. Si tuviera que explicar a alguien cómo realizar una actividad, <br>preferiría hacerlo por escrito o con dibujos o gráficos.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta27 }}	
								</td>							
							</tr>
							<!--R28-->
							<tr>
								<td>28. Si tuviera que explicar a alguien cómo realizar una actividad, <br>preferiría hacerlo oralmente, de manera directa.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta28 }}	
								</td>							
							</tr>
							<!--R29-->
							<tr>
								<td>29. Cuando estoy en una reunión, me gusta moverme, no permanecer sentado.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta29 }}
								</td>							
							</tr>
							<!--R30-->
							<tr>
								<td>30. En mi tiempo libre, lo más probable es que lea o que vea TV.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta30 }}	
								</td>							
							</tr>
							<!--R31-->
							<tr>
								<td>31. Si tuviera que explicar a alguien cómo realizar una actividad, <br>preferiría hacerlo mostrándole cómo.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta31 }}		
								</td>							
							</tr>
							<!--R32-->
							<tr>
								<td>32. En mi tiempo libre, lo más probable es que prefiera escuchar música.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta32 }}	
								</td>							
							</tr>
							<!--R33-->
							<tr>
								<td>33. En mi tiempo libre, lo más probable es que prefiera hacer ejercicio físico o deporte.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta33 }}		
								</td>							
							</tr>
							<!--R34-->
							<tr>
								<td>34. Si tuviera que recibir instrucciones precisas sobre lo que tengo que <br>hacer, me sentiría mejor si me las dijeran verbalmente.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta34 }}	
								</td>							
							</tr>
							<!--R35-->
							<tr>
								<td>35. Si tuviera que recibir instrucciones sobre lo que tengo que hacer,<br>me sentiría mejor si fuera por escrito.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta35 }}	
								</td>							
							</tr>
							<!--R36-->
							<tr>
								<td>36. Si tuviera que recibir instrucciones sobre lo que tengo que hacer,<br> me sentiría mejor si me mostrasen cómo hacerlo.
								</td>
								<td colspan="5" class="text-center">
									{{ $test->conociendo_estilo_aprendizaje->respuesta36 }}	
								</td>							
							</tr>
						</tbody>
				</table>				
			</div>
			<!---->
			<h4 class="title text-primary">Ayudando a los estudiantes a encontrar su estilo de aprendizaje</h4> 
			<h4 class="text-center">Lee con cuidado las siguientes declaraciones y califícalas, en términos de utilidad, según la siguiente escala:</h4>
			<div class="table-responsive">	
				<table class="table table-borderless" style="width: 500px; margin: auto; margin-bottom: 20px;">				
					<tbody>
						<tr>						
							<td class="text-center">Nada útil<br>1</td>
							<td class="text-center">No muy útil<br>2</td>
							<td class="text-center">Neutral<br>3</td>
							<td class="text-center">Algo útil<br>4</td>
							<td class="text-center">Muy útil<br>5</td>
						</tr>						
					</tbody>
				</table>				
			</div>
			<div class="table-responsive">       												
				<table class="table table-bordered">				
					<tbody>
						<!--R1-->
						<tr>							
							<td>1. Estudiar solo.</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta1 }}
							</td>							
						</tr>
						<!--R2-->
						<tr>
							<td>2. Estudiar imágenes y diagramas para entender ideas complejas.</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta2 }}
							</td>						
						</tr>
						<!--R3-->
						<tr>
							<td>3. Escuchar la clase.</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta3 }}
							</td>							
						</tr>
						<!--R4-->
						<tr>
							<td>4. Realizar yo mismo en vez de leer y escuchar al respecto.</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta4 }}	
							</td>							
						</tr>
						<!--R5-->
						<tr>
							<td>5. Aprender un procedimiento complicado mediante la lectura de instrucciones por escrito.</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta5 }}	
							</td>							
						</tr>
						<!--R6-->
						<tr>
							<td>6. Ver y escuchar presentaciones en video, en computadora o en película.</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta6 }}	
							</td>							
						</tr>
						<!--R7-->
						<tr>
							<td>7. Escuchar un libro o una clase en audio.</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta7 }}
							</td>							
						</tr>
						<!--R8-->
						<tr>
							<td>8. Realizar trabajo en laboratorio.
							</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta8 }}	
							</td>							
						</tr>
						<!--R9-->
						<tr>
							<td>9. Estudiar en libros.
							</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta9 }}		
							</td>							
						</tr>
						<!--R10-->
						<tr>
							<td>10. Estudiar en una habitación silenciosa.
							</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta10 }}		
							</td>							
						</tr>
						<!--R11-->
						<tr>
							<td>11. Tomar parte en las discusiones de grupo.
							</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta11 }}	
							</td>							
						</tr>
						<!--R12-->
						<tr>
							<td>12. Tomar parte en demostraciones prácticas en clase.
							</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta12 }}		
							</td>							
						</tr>
						<!--R13-->
						<tr>
							<td>13. Tomar apuntes y leerlos después.
							</td>
							<td colspan="5" class="text-center">
								{{ $test->encontrar_estilo_aprendizaje->respuesta13 }}	
							</td>							
						</tr>																		
					</tbody>
				</table>
			</div>	
			<!---->
			<h4 class="title text-primary">Organización del Tiempo</h4>
			<h4 style="margin-bottom: 20px;" class="text-justify"><b>Instrucciones:</b> Lee cuidadosamente las siguientes 
			afirmaciones y marca la respuesta si, con base en tu experiencia, son falsas o verdaderas.</h4>
			<div class="table-responsive" style="width: 80%; margin: auto;">       												
				<table class="table table-bordered">				
					<tbody>							
						<!--R1-->
						<tr>							
							<td>1. No tengo un lugar fijo para estudiar.</td>
							<td class="text-center">
								{{ $test->test_habito_estudio->organizacion_tiempo->respuesta1 }}							
							</td>							
						</tr>
						<!--R2-->
						<tr>							
							<td>2. Me gusta estudiar viendo televisión o escuchando música.</td>
							<td class="text-center">
								{{ $test->test_habito_estudio->organizacion_tiempo->respuesta2 }}					
							</td>							
						</tr>
						<!--R3-->
						<tr>							
							<td>3. Me gusta estudiar frente a la ventana.</td>
							<td class="text-center">
								{{ $test->test_habito_estudio->organizacion_tiempo->respuesta3 }}								
							</td>							
						</tr>	
						<!--R4-->
						<tr>							
							<td>4. Frecuentemente estudio o leo acostado en la cama.</td>
							<td class="text-center">
								{{ $test->test_habito_estudio->organizacion_tiempo->respuesta4 }}								
							</td>							
						</tr>
						<!--R5-->
						<tr>							
							<td>5. No me importa estudiar con poca luz.</td>
							<td class="text-center">
								{{ $test->test_habito_estudio->organizacion_tiempo->respuesta5 }}							
							</td>							
						</tr>											
					</tbody>
				</table>
			</div>
			<!---->
			<h4 class="title text-primary">Planificación</h4>
			<h4 style="margin-bottom: 20px;" class="text-justify"><b>Instrucciones:</b> Lee cuidadosamente las siguientes 
			afirmaciones y marca la respuesta si, con base en tu experiencia, son falsas o verdaderas.</h4>

			<div class="table-responsive" style="width: 90%; margin: auto;">       												
				<table class="table table-bordered">				
					<tbody>							
						<!--R1-->
						<tr>							
							<td>1. No acostumbro planificar el tiempo que voy a dedicar al estudio.</td>
							<td class="text-center">
								{{ $test->test_habito_estudio->planificacion->respuesta1 }}									
							</td>							
						</tr>
						<!--R2-->
						<tr>							
							<td>2. Cuando tengo un plan o propósito de estudio generalmente no lo cumplo.</td>
							<td class="text-center">
								{{ $test->test_habito_estudio->planificacion->respuesta2 }}								
							</td>							
						</tr>
						<!--R3-->
						<tr>							
							<td>3. Normalmente no termino los trabajos a tiempo.</td>
							<td class="text-center">
								{{ $test->test_habito_estudio->planificacion->respuesta3 }}							
							</td>							
						</tr>
						<!--R4-->
						<tr>							
							<td>4. El sueño y el cansancio me impiden estudiar con eficacia.</td>
							<td class="text-center">
								{{ $test->test_habito_estudio->planificacion->respuesta4 }}								
							</td>							
						</tr>
						<!--R5-->
						<tr>							
							<td>5. Cuando estudio tengo que estarme levantando, ya que no tengo todo el material que voy a usar a la mano.</td>
							<td class="text-center">
								{{ $test->test_habito_estudio->planificacion->respuesta5 }}									
							</td>							
						</tr>																	
					</tbody>
				</table>
			</div>
			<!---->
			<h4 class="title text-primary" style="margin-bottom: 30px;">Estrategias de aprendizaje</h4>
			<h4 style="margin-bottom: 20px;" class="text-justify"><b>Instrucciones:</b> Lee cuidadosamente las siguientes 
			afirmaciones y marca la respuesta si, con base en tu experiencia, son falsas o verdaderas.</h4>
			<div class="table-responsive" style="margin: auto;">       												
					<table class="table table-bordered">				
						<tbody>							
							<!--R1-->
							<tr>							
								<td>1. Cuando estudio, procuro aprenderme los temas de memoria.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta1 }}					
								</td>							
							</tr>
							<!--R2-->
							<tr>							
								<td>2. Me cuesta relacionar la asignatura con otros temas o ideas.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta2 }}				
								</td>							
							</tr>
							<!--R3-->
							<tr>							
								<td>3. Estudio con base en mis apuntes y no consulto otras fuentes.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta3 }}							
								</td>							
							</tr>
							<!--R4-->
							<tr>							
								<td>4. Me cuesta mucho realizar preguntas si tengo dudas en clase.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta4 }}							
								</td>							
							</tr>
							<!--R5-->
							<tr>							
								<td>5. Cuando estudio me cuesta trabajo resumir mentalmente lo que estoy aprendiendo.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta5 }}							
								</td>							
							</tr>
							<!--R6-->
							<tr>							
								<td>6. Nunca empleo procedimientos para recordar fechas, datos, etc.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta6 }}							
								</td>							
							</tr>	
							<!--R7-->
							<tr>							
								<td>7. Cuando leo no acostumbro tomar notas ni subrayar las palabras interesantes.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta7 }}							
								</td>							
							</tr>
							<!--R8-->
							<tr>							
								<td>8. No acostumbro leer previamente la portada e índice del libro.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta8 }}							
								</td>							
							</tr>
							<!--R9-->
							<tr>							
								<td>9. Por lo regular no tomo apuntes en clase.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta9 }}							
								</td>							
							</tr>	
							<!--R10-->
							<tr>							
								<td>10. Me cuesta trabajo cumplir con los compromisos académicos.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta10 }}							
								</td>							
							</tr>	
							<!--R11-->
							<tr>							
								<td>11. Tengo dificultad para seguir las explicaciones del profesor en clase.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta11 }}					
								</td>							
							</tr>
							<!--R12-->
							<tr>							
								<td>12. No subrayo las palabras más importantes.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta12 }}
								</td>							
							</tr>
							<!--R13-->
							<tr>							
								<td>13. No acostumbro realizar esquemas.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta13 }}
								</td>							
							</tr>																	
							<!--R14-->
							<tr>							
								<td>14. Estudio un día antes del examen.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta14 }}							
								</td>							
							</tr>
							<!--R15-->
							<tr>							
								<td>15. Me pongo muy nervioso cuando tengo un examen.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta15 }}						
								</td>							
							</tr>
							<!--R16-->
							<tr>							
								<td>16. En los exámenes empleo normalmente mucho más tiempo en las primeras preguntas y tengo que apresurarme en las restantes.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta16 }}							
								</td>							
							</tr>
							<!--R17-->
							<tr>							
								<td>17. Cuando tengo que realizar un trabajo no planifico el tiempo que debo dedicarle.</td>
								<td class="text-center">
									{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta17 }}						
								</td>							
							</tr>
						</tbody>
					</table>
				</div>

			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a>
				<a href="{{url('docente/estilos_aprendizaje/'.$test->alumno_id)}}" class="btn btn-success">
					Descargar Pdf
				</a> 
			</div>
		</div>
		@include('includes.footer')
		@endsection
