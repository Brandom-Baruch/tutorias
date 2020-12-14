<html>
<head>
	<title>Perfil Academico del Alumno {{$alumno->nia}}</title>		
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
		table.tabla1 {
			font-family: Arial, Helvetica, sans-serif;
			border: 1px solid #FFFFFF;
			width: 750px;
			height: 200px;
			text-align: center;
			border-collapse: collapse;
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
		table.tabla1 thead {
			background: #0B6FA4;
			border-bottom: 5px solid #FFFFFF;
		}
		table.tabla1 thead th {
			font-size: 17px;
			font-weight: bold;
			color: #FFFFFF;
			text-align: center;
			border-left: 2px solid #FFFFFF;
		}
		table.tabla1 thead th:first-child {
			border-left: none;
		}

		table.tabla1 tfoot td {
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
			<h3 class="title text-center">Test para detectar tutorados que requieran atención indivualizada</h3>

			<div style="padding: 10px; float: left; width: 50%; text-align: center;">
				<span>Escuela de procedencia: <br>{{ $cuestionario->escuela_procedencia }}</span>	
			</div>
			<div style="padding: 10px; float: right; width: 50%; text-align: center;">
				<span>Ubicación de la escuela secundaria de prosedencia: <br>{{ $cuestionario->ubicacion_escuela }}</span>
			</div>	<br><br><br><br>

			<table class="tabla1">
				<thead>
					<tr>
						<th>N°</th>
						<th>Descripción</th>
						<th>Respuesta <br> (V/F)</th>
					</tr>
				</thead>
				<tbody>
					<!--R1-->
					<tr>
						<td>1</td>							
						<td style="text-align: left;">Mi promedio de la secundaria es de igual o mayor a 7</td>
						<td>
							{{ $cuestionario->respuesta1 }}							
						</td>							
					</tr>
					<!--R2-->
					<tr>
						<td>2</td>							
						<td style="text-align: left;">Reprobé 2 o más materias en la secundaria</td>
						<td>
							{{ $cuestionario->respuesta2 }}								
						</td>							
					</tr>
					<!--R3-->
					<tr>
						<td>3</td>							
						<td style="text-align: left;">Yo elegí el plantel de bachillerato al que asisto</td>
						<td>
							{{ $cuestionario->respuesta3 }}								
						</td>							
					</tr>													
					<!--R4-->
					<tr>
						<td>4</td>							
						<td style="text-align: left;">Asisto a la Media Superior porque creo que me sería útil</td>
						<td>
							{{ $cuestionario->respuesta4 }}								
						</td>							
					</tr>
					<!--R5-->
					<tr>
						<td>5</td>							
						<td style="text-align: left;">Me gusta la escuela</td>
						<td>
							{{ $cuestionario->respuesta5 }}									
						</td>							
					</tr>
					<!--R6-->
					<tr>
						<td>6</td>							
						<td style="text-align: left;">Soy bueno para estudiar</td>
						<td>
							{{ $cuestionario->respuesta5 }}									
						</td>							
					</tr>
					<!--R7-->
					<tr>
						<td>7</td>							
						<td style="text-align: left;">En la secundaria sentía confianza con algún maestro(a) como para platicar con él(ella)</td>
						<td>
							{{ $cuestionario->respuesta7 }}								
						</td>							
					</tr>
					<!--R8-->
					<tr>
						<td>8</td>							
						<td style="text-align: left;">En la secundaria preguntaba mis dudas al maestro(a)</td>
						<td>
							{{ $cuestionario->respuesta8 }}									
						</td>							
					</tr>
					<!--R9-->
					<tr>
						<td>9</td>							
						<td style="text-align: left;">En la secundaria me molestaban con frecuencia otro u otros compañeros (burlas, intimidación, golpes, extorsiones, etc.)</td>
						<td>
							{{ $cuestionario->respuesta9 }}								
						</td>							
					</tr>
					<!--R10-->
					<tr>
						<td>10</td>							
						<td style="text-align: left;">Si yo reprobara alguna materia, se lo platicaría a mi mamá o mi papá</td>
						<td>
							{{ $cuestionario->respuesta10 }}								
						</td>							
					</tr>
					<!--R11-->
					<tr>
						<td>11</td>							
						<td style="text-align: left;">Si tuviera un problema personal, lo platicaría con mi mamá o mi papá</td>
						<td>
							{{ $cuestionario->respuesta11 }}									
						</td>							
					</tr>
					<!--R12-->
					<tr>
						<td>12</td>							
						<td style="text-align: left;">Me gustaría emigrar a los Estados Unidos en los próximos 5 años</td>
						<td>
							{{ $cuestionario->respuesta12 }}								
						</td>							
					</tr>
					<!--R13-->
					<tr>
						<td>13</td>							
						<td style="text-align: left;">Es posible que me case o viva con mi pareja antes de terminar el bachillerato</td>
						<td>
							{{ $cuestionario->respuesta13 }}									
						</td>							
					</tr>
					<!--R14-->
					<tr>
						<td>14</td>							
						<td style="text-align: left;">En mi casa hemos tenido problemas económicos serios (deudas, no alcanza para los gastos del diario, etc).</td>
						<td>
							{{ $cuestionario->respuesta14 }}									
						</td>							
					</tr>
					<!--R15-->
					<tr>
						<td>15</td>							
						<td style="text-align: left;">Es más importante trabajar que estudiar</td>
						<td>
							{{ $cuestionario->respuesta15 }}									
						</td>							
					</tr>
				</tbody>
			</table>
			<h3 class="text-center">Gracias por compartir esta información usted es lo más importante para nosotros.</h3>
		</div>
	</div>
	<div class="pie">
		<h3>Dirección: Calle Emiliano Zapata Sur N, Sexto Barrio Emiliano Zapata, 90140 Panotla, Tlax. <br>
			Teléfono: 246 462 5147
		</h3>
	</div>
</body>
</html>