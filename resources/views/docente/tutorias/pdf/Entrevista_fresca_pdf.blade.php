<html>
<head>
	<title>Entrevista Fresca del Alumno {{$alumno->nia}}</title>		
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
		.col-md-4 {
			flex: 0 0 33.333333%;
			max-width: 33.333333%;
		}
		.form-group {
			margin-bottom: 1rem;
		}
		.col-md-3 {
			flex: 0 0 25%;
			max-width: 25%;
		}	
		hr{
			page-break-after: always;
			border: none;
			margin: 0;
			padding: 0;
		}
		table.marcax {
			font-family: Arial, Helvetica, sans-serif;
			border: 1px solid #FFFFFF;
			width: 750px;
			height: 200px;
			text-align: left;
			border-collapse: collapse;
			margin: auto;
		}
		table.marcax td, table.marcax th {
			border: 1px solid #FFFFFF;
			padding: 3px 2px;
		}
		table.marcax tbody td {
			font-size: 13px;			
		}
		table.marcax tr:nth-child(even) {
			background: #D0E4F5;
		}
		table.marcax tfoot td {
			font-size: 14px;
		}
		.habtidotd {
			text-align: center;
		}
		table.marca_si_no {
			font-family: Arial, Helvetica, sans-serif;
			border: 1px solid #1C6EA4;
			width: 750px;
			height: 200px;
			text-align: center;
			border-collapse: collapse;
			margin: auto;
		}
		table.marca_si_no td, table.marca_si_no th {
			border: 1px solid #AAAAAA;
			padding: 3px 2px;
		}
		table.marca_si_no tbody td {
			font-size: 13px;
		}
		table.marca_si_no tr:nth-child(even) {
			background: #D0E4F5;
		}
		table.marca_si_no tfoot td {
			font-size: 14px;
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
			<h3 class="title text-primary">Datos Familiares</h3>
			
			<div style="padding: 10px; float: left; width: 45%;">
				<b>¿Con quién vives?</b>						
				<p>{{$entrevista->datoFamiliar->respuesta1}}</p>
				<b>Otro. ¿Cuál?</b>
				<p>{{$entrevista->datoFamiliar->r1}}</p><br>
				<!---->
				<b>¿Tienes hijos?</b>
				<p>{{$entrevista->datoFamiliar->respuesta7}}</p>
				<!---->
				<b>¿Cuántos hermanos/as tienes?</b>
				<p>{{$entrevista->datoFamiliar->respuesta2}}</p>
				<!---->				
			</div>
			<div style="padding: 10px; float: right; width: 45%;">
				<b>¿Hablas otro idioma o lengua indígena?</b>
				<p>{{$entrevista->datoFamiliar->respuesta5}}</p>
				<b>¿Cuál?</b>
				<p>{{$entrevista->datoFamiliar->r5}}</p>
				<!---->
				<b>¿Cómo te llevas con tu familia?</b>
				<p>{{$entrevista->datoFamiliar->respuesta4}}</p>
				<!---->			
				<b>¿Cuánto es el ingreso económico mensual en tu casa?</b>
				<p>{{$entrevista->datoFamiliar->respuesta6}}</p>				
			</div>												
			<div style="padding: 3px;">				
				<b>¿Qué lugar ocupas?</b>
				<p>{{$entrevista->datoFamiliar->respuesta3}}</p>
				<b>Otro</b>
				<p>{{$entrevista->datoFamiliar->r3}}</p><br>								
			</div>								

			<h3 class="title text-primary">Datos Academicos</h3>						
			<div style="padding: 10px; float: left; width: 45%;">
				<b>¿En dónde cursaste la secundaria?</b>						
				<p>{{$entrevista->datoAcademico->respuesta1}}</p>
				<!---->
				<b>¿Crees que tus resultados escolares obtenido, corresponden con el esfuerzo que invierte en ellos?</b>
				<p>{{$entrevista->datoAcademico->respuesta4}}</p>						
				<b>¿Por qué?</b>
				<p>{{$entrevista->datoAcademico->r4}}</p>								
				<!---->											
			</div>
			<div style="padding: 10px; float: right; width: 45%;">
				<b>¿Cómo consideras tu desempeño escolar al momento?</b>						
				<p>{{$entrevista->datoAcademico->respuesta3}}</p>
				<!---->		
				<b>¿Qué materias te gustaron más en la secundaria?</b>	
				<p>{{$entrevista->datoAcademico->respuesta2}}</p>
				<b>¿Por qué?</b>
				<p>{{$entrevista->datoAcademico->r2}}</p>					
			</div>		
		</div>
	</div>
	<div class="pie">		
		 <h3>Dirección: Calle Emiliano Zapata Sur N, Sexto Barrio Emiliano Zapata, 90140 Panotla, Tlax. <br>
		 	Teléfono: 246 462 5147
		 </h3>				
	</div><hr>
	<div class="container">
		<div class="section">												
			<h3 class="title text-primary" style="margin-top: 80px;">Hábitos de Estudio</h3>			
			<div style="padding: 10px; float: left; width: 45%;">
				<b>¿Qué tiempo dedicas diariamente, después de la escuela (en tu casa) para las TAREAS?</b><br>
				<p>{{$entrevista->habitoEstudio->respuesta1}}</p>
				<!---->
				<b>¿Qué tiempo a la semana dedicas a leer?</b>						
				<p>{{$entrevista->habitoEstudio->respuesta3}}</p>
				<!---->		
				<b>¿Quién te ayuda a estudiar en casa?</b>
				<p>{{$entrevista->habitoEstudio->respuesta5}}</p>			
				<b>Otros</b>
				<p>{{$entrevista->habitoEstudio->r5}}</p><br>	
				<!---->
				<b>¿Qué técnicas de estudio usas?</b>						
				<p>{{$entrevista->habitoEstudio->respuesta7}}</p>					
				<b>Otro</b>
				<p>{{$entrevista->habitoEstudio->r7}}</p><br>	
			</div>
			<div style="padding: 10px; float: right; width: 45%;">
				<b>¿Qué tiempo dedicas diariamente, después de la escuela (en tu casa) para ESTUDIAR?</b><br>
				<p>{{$entrevista->habitoEstudio->respuesta2}}</p>
				<!---->
				<b>¿Cuál es tu horario preferido para estudiar?</b>
				<p>{{$entrevista->habitoEstudio->respuesta4}}</p>	
				<!---->
				<b>¿En qué lugar prefieres estudiar?</b>
				<p>{{$entrevista->habitoEstudio->respuesta6}}</p>					
				<b>Otro</b>
				<p>{{$entrevista->habitoEstudio->r6}}</p><br>
				<!---->
				<b>¿Tus papas o hermanos te motivan a estudiar?</b>
				<p>{{$entrevista->habitoEstudio->respuesta8}}</p>					
				<b>¿Cómo?</b>
				<p>{{$entrevista->habitoEstudio->r8}}</p><br>		
			</div>			
			<h3 class="text-center title text-primary">Marca con una X el motivo principal que tienes para seguir estudiando</h3>
			<table class="marcax">
				<tbody>
					<tr>
						<td><font size="3">Aprender cada dia mas</font></td>
						<td class="habtidotd"><font size="2">{{$entrevista->habitoEstudio->r9_1}}</font></td>
					</tr>
					<tr>
						<td><font size="3">Poder hacer las cosas por ti mismo y a tu manera</font></td>
						<td class="habtidotd"><font size="2">{{$entrevista->habitoEstudio->r9_2}}</font></td>
					</tr>
					<tr>
						<td><font size="3">El interés de despertar en ti todo lo que estudias</font></td>
						<td class="habtidotd"><font size="2">{{$entrevista->habitoEstudio->r9_3}}</font></td>
					</tr>
					<tr>
						<td><font size="3">La satisfacción por obtener buenos resultados</font></td>
						<td class="habtidotd"><font size="2">{{$entrevista->habitoEstudio->r9_4}}</font></td>
					</tr>
					<tr>
						<td><font size="3">Evitar el fracaso en los estudios</font></td>
						<td class="habtidotd"><font size="2">{{$entrevista->habitoEstudio->r9_5}}</font></td>
					</tr>
					<tr>
						<td><font size="3">Agradar a tus padres y/o profesores</font></td>
						<td class="habtidotd"><font size="2">{{$entrevista->habitoEstudio->r9_6}}</font></td>
					</tr>
					<tr>
						<td><font size="3">Obtener premios por parte de tus padres o familia</font></td>
						<td class="habtidotd"><font size="2">{{$entrevista->habitoEstudio->r9_7}}</font></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div><hr>
	<div class="container">
		<div class="section">												
			<h3 class="title text-primary" style="margin-top: 50px;">Otras Actividades</h3>			
			<div style="padding: 10px; float: left; width: 45%;">
				<b>¿Qué te gusta hacer en tu tiempo libre? (pasatiempos)?</b>			
				<p>{{$entrevista->otraActividad->respuesta1}}</p>
				<!---->
				<b>¿Cuál el momento MAS TRISTE de tu vida?</b>						
				<p>{{$entrevista->otraActividad->respuesta3}}</p>	
			</div>
			<div style="padding: 10px; float: right; width: 45%;">
				<b>¿Cuál es el momento MAS FELIZ de tu vida?</b>					
				<p>{{$entrevista->otraActividad->respuesta2}}</p>		
				<!---->
				<b>Descríbete en los aspectos emocionales e intelectuales</b>			
				<p>{{$entrevista->otraActividad->respuesta4}}</p>
			</div>
			<h3 class="title text-primary">Datos Adicionales</h3>
			<div style="padding: 10px; float: left; width: 45%;">
				<b>¿A que persona le cuentas tus problemas?</b>
				<p>{{$entrevista->datosAdicionales->respuesta19}}</p>
				<!---->
				<b>¿Tienes acceso a internet en casa?</b>
				<p>{{$entrevista->datosAdicionales->respuesta7}}</p>
				<!---->
				<b>¿Cuántas horas al día ves televisión en tu casa?</b>							
				<p>{{$entrevista->datosAdicionales->respuesta10}}</p>
				<!---->
				<b>¿A qué hora te levantas para venir a la escuela?</b>
				<p>{{$entrevista->datosAdicionales->respuesta12}}</p>
				<!---->
				<b>¿A qué persona le tienes confianza?</b>	
				<p>{{$entrevista->datosAdicionales->respuesta18}}</p>
				<!---->		
				<b>¿Consideras que tienes alguna capacidad diferente?</b>		
				<p>{{$entrevista->datosAdicionales->respuesta1}}</p>				
				<b>¿Cúal?</b>
				<p>{{$entrevista->datosAdicionales->r1}}</p><br>								
			</div>
			<div style="padding: 10px; float: right; width: 45%;">
					
				<!---->
				<b>¿Tienes acceso a una computadora portátil o de escritorio en casa?</b>
				<p>{{$entrevista->datosAdicionales->respuesta6}}</p>
				<!---->
				<b>¿Tienes celular propio?</b>
				<p>{{$entrevista->datosAdicionales->respuesta8}}</p>
				<!---->
				<b>¿Cuántas horas al día haces uso del tu celular?</b>
				<p>{{$entrevista->datosAdicionales->respuesta9}}</p>
				<!---->
				<b>¿Cuántas horas al día haces uso de videojuegos?</b>		
				<p>{{$entrevista->datosAdicionales->respuesta11}}</p>
				<!---->
				<b>¿Te han intervenido quirúrgicamente?</b>					
				<p>{{$entrevista->datosAdicionales->respuesta4}}</p>			
				<b>¿Cúal?</b>
				<p>{{$entrevista->datosAdicionales->r4}}</p><br>
				<!---->
				<b>¿A qué hora te duermes entre semana?</b>	
				<p>{{$entrevista->datosAdicionales->respuesta13}}</p>	
							
			</div>				
		</div>
	</div><hr>
	<div class="container">
		<div class="section" style="margin-top: 50px;">															
			<div style="padding: 10px; float: left; width: 45%;">
				<b>¿Padeces alguna enfermedad?</b>					
				<p>{{$entrevista->datosAdicionales->respuesta2}}</p>
				<b>¿Cúal?</b>
				<p>{{$entrevista->datosAdicionales->r2}}</p><br>
				<!---->
				<b>¿Se te dificulta conciliar el sueño?</b>
				<p>{{$entrevista->datosAdicionales->respuesta14}}</p>							
				<b>¿Por qué?</b>
				<p>{{$entrevista->datosAdicionales->r14}}</p><br>
				<!---->
				<b>¿Cuentas con algún trabajo después de la escuela?</b>
				<p>{{$entrevista->datosAdicionales->respuesta17}}</p>			
				<b>¿Cuál?</b>
				<p>{{$entrevista->datosAdicionales->r17}}</p><br>							
				<b>¿Horario?</b>
				<p>{{$entrevista->datosAdicionales->r17_2}}</p><br>								
				<!---->
				<b>¿Te encuentras bajo tratamiento médico?</b>
				<p>{{$entrevista->datosAdicionales->respuesta3}}</p>
				<b>¿Cúal?</b>
				<p>{{$entrevista->datosAdicionales->r3}}</p><br>														
				<b>¿Horario?</b>
				<p>{{$entrevista->datosAdicionales->r3_2}}</p><br>
				<!---->	
			</div>
			<div style="padding: 10px; float: right; width: 45%;">
				<b>¿Consideras que tu horario de alimentación es el correcto?</b>
				<p>{{$entrevista->datosAdicionales->respuesta15}}</p>				
				<b>¿Por qué?</b>
				<p>{{$entrevista->datosAdicionales->r15}}</p><br>
				<!---->
				<b>¿Qué responsabilidades tienes dentro de casa?</b>
				<p>{{$entrevista->datosAdicionales->respuesta16}}</p>
				<b>¿Por qué?</b>
				<p>{{$entrevista->datosAdicionales->r16}}</p><br>
				<!---->
				<b>¿Te ha llamado la atención probar alguna droga?</b>		
				<p>{{$entrevista->datosAdicionales->respuesta5}}</p>										
				<b>¿Cúal?</b>		
				<p>{{$entrevista->datosAdicionales->r5}}</p><br>
				<!---->
				<b>¿Te encuentras bajo tratamiento médico?</b>
				<p>{{$entrevista->datosAdicionales->respuesta3}}</p>				
				<b>¿Cúal?</b>
				<p>{{$entrevista->datosAdicionales->r3}}</p><br>
				<b>¿Horario?</b>
				<p>{{$entrevista->datosAdicionales->r3_2}}</p><br>
			</div>						
		</div>		
	</div><hr>
	<div class="container">
		<div class="section" style="margin-top: 50px;">	
			<h3 class="title text-center text-primary">Marca SI o NO en las características y cualidades que consideres que tienes o no como persona</h3>									
			<table class="marca_si_no">
				<tbody>
					<tr>
						<td><font size="3">ALEGRE</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_1}}</font></td>
						<td><font size="3">CARIÑOSO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_10}}</font></td>
					</tr>
					<tr>
						<td><font size="3">TRISTE</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_2}}</font></td>
						<td><font size="3">FRIO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_11}}</font></td>
					</tr>
					<tr>
						<td><font size="3">AGRESIVO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_3}}</font></td>
						<td><font size="3">OBEDIENTE</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_12}}</font></td>
					</tr>
					<tr>
						<td><font size="3">DOCIL</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_4}}</font></td>
						<td><font size="3">MENTIROSO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_13}}</font></td>
					</tr>
					<tr>
						<td><font size="3">TRANQUILO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_5}}</font></td>
						<td><font size="3">MEDIOSO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_14}}</font></td>
					</tr>
					<tr>
						<td><font size="3">INQUIETO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_6}}</font></td>
						<td><font size="3">VALIENTE</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_15}}</font></td>
					</tr>
					<tr>
						<td><font size="3">IMAGINATIVO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_7}}</font></td>
						<td><font size="3">DISTRAIDO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_16}}</font></td>
					</tr>
					<tr>
						<td><font size="3">REALISTA</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_8}}</font></td>
						<td><font size="3">ATENTO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_17}}</font></td>
					</tr>
					<tr>
						<td><font size="3">EXPRESIVO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_9}}</font></td>
						<td><font size="3">INTROVERTIDO</font></td>
						<td><font size="3">{{$entrevista->datosAdicionales->r20_17}}</font></td>
					</tr>
				</tbody>
			</table><br>				
			<h3 class="text-center">Gracias por compartir esta información usted es lo más importante para nosotros.</h3>
		</div>		
	</div>				
</body>
</html>