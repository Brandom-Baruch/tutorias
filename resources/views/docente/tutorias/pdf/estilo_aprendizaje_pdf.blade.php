<html>
<head>
	<title>Estilo de aprendizaje del Alumno {{$alumno->nia}}</title>		
	<style type="text/css">
		@page {
			margin: 0cm 0cm;
			font-family: Arial;
		}	
		body {
			font-family: Arial;
		}			
		.cabeza  {
			position: fixed;
			top: 0cm;
			left: 0cm;
			right: 0cm;
			height: 2.3cm;
			background-color: #7F1E57;
			color: white;
			text-align: center;
			line-height: 30px;
		}

		.pie {
			position: fixed;
			bottom: 0cm;
			left: 0cm;
			right: 0cm;
			height: 2.5cm;
			background-color: #7F1E57;
			color: white;
			text-align: center;
			line-height: 35px;
		}

		.izquierda {
			float: left;
			width: 58px;						
			margin: 4px; 			
		}
		.derecha {
			float: right;
			width: 70px;
			margin: 4px; 
		}
		.escuela {
			font-family: Arial;
			text-align: center;
			margin-left: 60px;
			margin-top: 25px; 
		}		
		.container {
			width: 100%;
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
		}
		.section {
			padding: 70px 0;
		}		
		.text-center {
			text-align: center !important;
		}					

		.title {
			margin-top: 30px;
			margin-bottom: 25px;
			min-height: 32px;
		}
		.text-primary {
			color: #9c27b0 !important;
		}
		.row {
			display: flex;
			flex-wrap: wrap;
			margin-right: -15px;
			margin-left: -15px;
		}				
		.text-primary {
			color: #9c27b0 !important;
		}	
		hr{
			page-break-after: always;
			border: none;
			margin: 0;
			padding: 0;
		}
		table.reglas1 {
			font-family: Arial, Helvetica, sans-serif;
			border: 1px solid #FFFFFF;
			width: 550px;
			text-align: center;
			border-collapse: collapse;
			margin: auto;
		}
		table.reglas1 td, table.reglas1 th {
			border: 1px solid #FFFFFF;
			padding: 3px 2px;
		}
		table.reglas1 tbody td {
			font-size: 13px;
		}
		table.reglas1 tr:nth-child(even) {
			background: #D0E4F5;
		}
		table.reglas1 tfoot td {
			font-size: 14px;
		}
		table.tabla1 {
			font-family: Arial, Helvetica, sans-serif;
			border: 1px solid #FFFFFF;
			width: 750px;
			height: 200px;
			border-collapse: collapse;
			margin: auto;
		}
		table.tabla1 td, table.tabla1 th {
			border: 1px solid #FFFFFF;
			padding: 3px 2px;
		}
		table.tabla1 tbody td {
			font-size: 13px;
		}
		table.tabla1 tr:nth-child(even) {
			background: #D0E4F5;
		}
		table.tabla1 tfoot td {
			font-size: 14px;
		}
		.col-6 {
		  flex: 0 0 50%;
		  max-width: 50%;
		}
	</style>
	<?php $puebla = '/img/logo_puebla.png'; ?>	
	<?php $escuela = '/img/alumno.png'; ?>	
</head>
<body>
	<header class="cabeza">
		<div style="float: left; width: 95%;">
			<img class="izquierda" src="{{ public_path() . $puebla }}"/>
			<h2 class="escuela">Colegio de Bachilleres del Estado de Tlaxcala Plantel 11</h2>						
		</div>						
		<div style="float: right; width: 5%;">
			<img class="derecha" src="{{ public_path() . $escuela }}"/>
		</div>
	</header>		
	<div class="container">
		<div class="section">			
			<div class="text-center">   														
				<h2 style="margin: auto 2px;">
					Respuestas del Alumno: <b class="text-primary">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</b>
				</h2>		
			</div>							
			<h3 class="title text-primary">Conociendo los estilos de aprendizaje de los tutorados</h3>
			<h3 style="margin-bottom: 20px;" class="text-justify"><b>Instrucciones:</b> Lee con atención el siguiente cuestionario y marca en las columnas de la derecha el número que corresponda a tu respuesta, de acuerdo con la siguiente escala:</h3>
			<table class="reglas1">
				<tbody>
					<tr>
						<td>NUNCA <br>1</td>
						<td>RARA VEZ <br>2</td>
						<td>A VECES <br>3</td>
						<td>CASI SIEMPRE <br>4</td>
						<td>SIEMPRE <br>5</td>
					</tr>
				</tbody>
			</table><br>
			<!---->
			<table class="tabla1">
				<tbody>
					<tr>							
						<td>1. Tomo muchas notas y me gusta garabatear mientras escucho una clase o conferencia.</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta1 }}	
						</td>							
					</tr>
					<!--R2-->
					<tr>
						<td>2. Cuando leo, lo hago en voz alta o muevo los labios para escuchar las palabras de mi mente.</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta2 }}
						</td>						
					</tr>
					<!--R3-->
					<tr>
						<td>3. Prefiero actuar directamente, probando lo que tengo que hacer, en vez de seguir instrucciones <br>dadas por alguien.</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta3 }}
						</td>							
					</tr>
					<!--R4-->
					<tr>
						<td>4. Se me dificulta conversar con alguien que no me mire a los ojos.</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta4 }}	
						</td>							
					</tr>
					<!--R5-->
					<tr>
						<td>5. Se me dificulta platicar con alguien que permanece frío o indiferente.</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta5 }}
						</td>							
					</tr>
					<!--R6-->
					<tr>
						<td>6. Se me dificulta platicar con alguien que permanece en silencio sin responderme.</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta6 }}	
						</td>							
					</tr>
					<!--R7-->
					<tr>
						<td>7. Escribo listas de lo que tengo que hacer para recordar mejor.</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta7 }}	
						</td>							
					</tr>
					<!--R8-->
					<tr>
						<td>8. Aunque no tome notas porque me distraigo, puedo recordar lo que alguien haya <br>dicho en clase o conferencia.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta8 }}	
						</td>							
					</tr>
					<!--R9-->
					<tr>
						<td>9. Cuando leo una novela, pongo mucha atención a los pasajes <br>que describen detalles de vestuario, lugares, etc.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta9 }}
						</td>							
					</tr>
					<!--R10-->
					<tr>
						<td>10. Cuando leo una novela me concentro en los diálogos y conversaciones entre los personajes.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta10 }}
						</td>							
					</tr>
					<!--R11-->
					<tr>
						<td>11. Tomo notas y apuntes de clase, pero raramente los vuelvo a consultar.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta11 }}
						</td>							
					</tr>
					<!--R12-->
					<tr>
						<td>12. Necesito escribir las instrucciones para poder seguirlas en orden.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta12 }}	
						</td>							
					</tr>
					<!--R13-->
					<tr>
						<td>13. Me gusta pensar en voz alta cuando escribo o resuelvo problemas.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta13 }}	
						</td>							
					</tr>
					<!--R14-->
					<tr>
						<td>14. Cuando elijo qué leer, prefiero novelas, cuentos o relatos de acción,<br> en los que se plasme el drama y el sentimiento entre los personajes.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta14 }}
						</td>							
					</tr>
					<!--R15-->
					<tr>
						<td>15. Puedo comprender lo que alguien dice, aun sin observar sus gestos al hablar.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta15 }}
						</td>							
					</tr>
					<!--R16-->
					<tr>
						<td>16. Necesito observar a la persona con la que platico para poder mantener la <br>atención en el tema de conversación.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta16 }}
						</td>							
					</tr>
					<!--R17-->
					<tr>
						<td>17. Recuerdo mejor las cosas cuando las digo otra vez.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta17 }}
						</td>							
					</tr>
					<!--R18-->
					<tr>
						<td>18. Cuando conozco por primera vez a una persona, me fijo en sus rasgos <br>faciales y en su apariencia.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta18 }}	
						</td>							
					</tr>
					<!--R19-->
					<tr>
						<td>19. Cuando leo en silencio, muevo los labios al ritmo de la lectura.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta19 }}
						</td>							
					</tr>
					<!--R20-->
					<tr>
						<td>20. Me gusta profundizar en temas interesantes cuando me encuentro <br>con alguien dispuesto a conversar.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta20 }}
						</td>							
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="pie">
		<h3>Dirección: Calle Emiliano Zapata Sur N, Sexto Barrio Emiliano Zapata, 90140 Panotla, Tlax. <br>
			Teléfono: 246 462 5147
		</h3>
	</div><hr>
	<div class="container">
		<div class="section">			
			<div class="text-center">   																
			</div><br><br><br><br>							
			<!---->
			<table class="tabla1">
				<tbody>
					<!--R21-->
					<tr>
						<td>21. Cuando estoy en una fiesta o reunión, me gusta sentarme y observar a la gente.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta21 }}
						</td>							
					</tr>
					<!--R22-->
					<tr>
						<td>22. Cuando platico sobre algo, hago ademanes y gestos para enfatizar.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta22 }}	
						</td>							
					</tr>
					<!--R23-->
					<tr>
						<td>23. Cuando recuerdo algún hecho, puedo verlo mentalmente, con detalles de dónde y cómo lo vi.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta23 }}
						</td>							
					</tr>
					<!--R24-->
					<tr>
						<td>24. Prefiero escuchar noticias en la radio que leer el periódico.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta24 }}	
						</td>							
					</tr>
					<!--R25-->
					<tr>
						<td>25. Mi escritorio y lugar de estudio lucen desordenados.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta25 }}
						</td>							
					</tr>
					<!--R26-->
					<tr>
						<td>26. Cuando asisto a una fiesta o reunión, me gusta involucrarme en <br>ella (bailar, jugar..) en vez de permanecer al margen.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta26 }}	
						</td>							
					</tr>
					<!--R27-->
					<tr>
						<td>27. Si tuviera que explicar a alguien cómo realizar una actividad, <br>preferiría hacerlo por escrito o con dibujos o gráficos.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta27 }}	
						</td>							
					</tr>
					<!--R28-->
					<tr>
						<td>28. Si tuviera que explicar a alguien cómo realizar una actividad, <br>preferiría hacerlo oralmente, de manera directa.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta28 }}	
						</td>							
					</tr>
					<!--R29-->
					<tr>
						<td>29. Cuando estoy en una reunión, me gusta moverme, no permanecer sentado.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta29 }}
						</td>							
					</tr>
					<!--R30-->
					<tr>
						<td>30. En mi tiempo libre, lo más probable es que lea o que vea TV.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta30 }}	
						</td>							
					</tr>
					<!--R31-->
					<tr>
						<td>31. Si tuviera que explicar a alguien cómo realizar una actividad, <br>preferiría hacerlo mostrándole cómo.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta31 }}		
						</td>							
					</tr>
					<!--R32-->
					<tr>
						<td>32. En mi tiempo libre, lo más probable es que prefiera escuchar música.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta32 }}	
						</td>							
					</tr>
					<!--R33-->
					<tr>
						<td>33. En mi tiempo libre, lo más probable es que prefiera hacer ejercicio físico o deporte.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta33 }}		
						</td>							
					</tr>
					<!--R34-->
					<tr>
						<td>34. Si tuviera que recibir instrucciones precisas sobre lo que tengo que <br>hacer, me sentiría mejor si me las dijeran verbalmente.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta34 }}	
						</td>							
					</tr>
					<!--R35-->
					<tr>
						<td>35. Si tuviera que recibir instrucciones sobre lo que tengo que hacer,<br>me sentiría mejor si fuera por escrito.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta35 }}	
						</td>							
					</tr>
					<!--R36-->
					<tr>
						<td>36. Si tuviera que recibir instrucciones sobre lo que tengo que hacer,<br> me sentiría mejor si me mostrasen cómo hacerlo.
						</td>
						<td>
							{{ $test->conociendo_estilo_aprendizaje->respuesta36 }}	
						</td>							
					</tr>
				</tbody>
			</table>
		</div>
	</div><hr>
	<div class="container">
		<div class="section">			
			<br><br>
			<h3 class="title text-primary">Ayudando a los estudiantes a encontrar su estilo de aprendizaje</h3> 
			<h4>Lee con cuidado las siguientes declaraciones y califícalas, en términos de utilidad, según la siguiente escala:</h4>
			<table class="reglas1" style="width: 500px; margin: auto; margin-bottom: 20px;">				
				<tbody>
					<tr>						
						<td>Nada útil<br>1</td>
						<td>No muy útil<br>2</td>
						<td>Neutral<br>3</td>
						<td>Algo útil<br>4</td>
						<td>Muy útil<br>5</td>
					</tr>						
				</tbody>
			</table>
			<!---->
			<table class="tabla1">
				<tbody>
					<!--R1-->
					<tr>							
						<td>Estudiar solo.</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta1 }}	
						</td>							
					</tr>
					<!--R2-->
					<tr>
						<td>Estudiar imágenes y diagramas para entender ideas complejas.</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta2}}
						</td>						
					</tr>
					<!--R3-->
					<tr>
						<td>Escuchar la clase.</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta3 }}	
						</td>							
					</tr>
					<!--R4-->
					<tr>
						<td>Realizar yo mismo en vez de leer y escuchar al respecto.</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta4 }}	
						</td>							
					</tr>
					<!--R5-->
					<tr>
						<td>Aprender un procedimiento complicado mediante la lectura de instrucciones por escrito.</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta5 }}	
						</td>							
					</tr>
					<!--R6-->
					<tr>
						<td>Ver y escuchar presentaciones en video, en computadora o en película.</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta6 }}	
						</td>							
					</tr>
					<!--R7-->
					<tr>
						<td>Escuchar un libro o una clase en audio.</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta7 }}	
						</td>							
					</tr>
					<!--R8-->
					<tr>
						<td>Realizar trabajo en laboratorio.
						</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta8 }}	
						</td>							
					</tr>
					<!--R9-->
					<tr>
						<td>Estudiar en libros.
						</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta9  }}	
						</td>							
					</tr>
					<!--R10-->
					<tr>
						<td>Estudiar en una habitación silenciosa.
						</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta10 }}	
						</td>							
					</tr>
					<!--R11-->
					<tr>
						<td>Tomar parte en las discusiones de grupo.
						</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta11 }}
						</td>							
					</tr>
					<!--R12-->
					<tr>
						<td>Tomar parte en demostraciones prácticas en clase.
						</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta12 }}	
						</td>							
					</tr>
					<!--R13-->
					<tr>
						<td>Tomar apuntes y leerlos después.
						</td>
						<td>
							{{ $test->encontrar_estilo_aprendizaje->respuesta13 }}	
						</td>							
					</tr>
				</tbody>
			</table>

			<h2 class="title text-center">Habitos de estudio</h2>
			<h3 class="text-primary" style="margin-bottom: 30px;">Organización del Tiempo</h3>
			<h4 style="margin-bottom: 20px; text-align: justify;">
				<b class="text-primary">Instrucciones:</b> Lee cuidadosamente las siguientes afirmaciones y marca la respuesta si, con base en tu experiencia, son falsas o verdaderas.
			</h4>

			<table class="tabla1" style="width: 750px; margin: auto; margin-bottom: 20px; height: 120px;" >
				<tbody>
					<!--R1-->
					<tr>							
						<td>1. No tengo un lugar fijo para estudiar.</td>
						<td>
							{{ $test->test_habito_estudio->organizacion_tiempo->respuesta1 }}
						</td>							
					</tr>
					<!--R2-->
					<tr>							
						<td>2. Me gusta estudiar viendo televisión o escuchando música.</td>
						<td>
							{{ $test->test_habito_estudio->organizacion_tiempo->respuesta2 }}
						</td>							
					</tr>
					<!--R3-->
					<tr>							
						<td>3. Me gusta estudiar frente a la ventana.</td>
						<td>
							{{ $test->test_habito_estudio->organizacion_tiempo->respuesta3 }}								
						</td>							
					</tr>	
					<!--R4-->
					<tr>							
						<td>4. Frecuentemente estudio o leo acostado en la cama.</td>
						<td>
							{{ $test->test_habito_estudio->organizacion_tiempo->respuesta4 }}									
						</td>							
					</tr>
					<!--R5-->
					<tr>							
						<td>5. No me importa estudiar con poca luz.</td>
						<td>
							{{ $test->test_habito_estudio->organizacion_tiempo->respuesta5 }}									
						</td>							
					</tr>			
				</tbody>
			</table>
		</div>
	</div><hr>
	<div class="container">
		<div class="section">			
			<br><br>
			<h3 class="text-primary" style="margin-bottom: 30px;">Planificación</h3>
			<h4 style="margin-bottom: 20px; text-align: justify;">
				<b class="text-primary">Instrucciones:</b> Lee cuidadosamente las siguientes afirmaciones y marca la respuesta si, con base en tu experiencia, son falsas o verdaderas.
			</h4>
			<table class="tabla1" style="width: 750px; margin: auto; margin-bottom: 20px; height: 120px;" >
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
			<h3 class="text-primary" style="margin-bottom: 30px;">Estrategias de aprendizaje</h3>
			<h4 style="margin-bottom: 20px; text-align: justify;">
				<b class="text-primary">Instrucciones:</b> Lee cuidadosamente las siguientes afirmaciones y marca la respuesta si, con base en tu experiencia, son falsas o verdaderas.
			</h4>
			<table class="tabla1" style="width: 750px; margin: auto; margin-bottom: 20px; height: 120px;" >
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
							{{ $test->test_habito_estudio->estrategias_aprendizaje->respuesta13}}								
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
			<h3 class="text-center">Gracias por compartir esta información usted es lo más importante para nosotros.</h3>
		</div>
	</div>
</div>
</body>
</html>