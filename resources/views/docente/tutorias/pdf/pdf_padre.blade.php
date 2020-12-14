<html>
<head>
	<title>Entrevista Fresca del Padre {{$entrevista->padres[0]->name}}</title>		
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
		.title {
			margin-top: 30px;
			margin-bottom: 25px;
			min-height: 32px;
		}
		.text-center {
			text-align: center !important;
		}				
		.profile-page .page-header {
			height: 380px;
			background-position: top center;
		}

		.profile-page .profile {
			text-align: center;
		}
		.profile-page .profile .name {
			margin-top: -80px;
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
		table.tabla {
			margin: auto;
			font-family: Arial, Helvetica, sans-serif;
			border: 1px solid #FFFFFF;
			width: 100%;
			height: 200px;
			text-align: left;
			border-collapse: collapse;
		}
		table.tabla td, table.tabla th {
			border: 1px solid #FFFFFF;
			padding: 3px 2px;
		}
		table.tabla tbody td {
			font-size: 13px;
		}
		table.tabla tr:nth-child(even) {
			background: #D0E4F5;
		}
		table.tabla thead {
			background: #0B6FA4;
			border-bottom: 5px solid #FFFFFF;
		}
		table.tabla thead th {
			font-size: 17px;
			font-weight: bold;
			color: #FFFFFF;
			text-align: center;
			border-left: 2px solid #FFFFFF;
		}
		table.tabla thead th:first-child {
			border-left: none;
		}
		hr{
			page-break-after: always;
			border: none;
			margin: 0;
			padding: 0;
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
				<h3 class="title">Respuestas del Padre: {{$entrevista->padres[0]->name}} {{$entrevista->padres[0]->apellidoP}} {{$entrevista->padres[0]->apellidoM}}</h3>						
			</div>							
			<h3 class="title text-center">Selecciona si su hijo(a) se relaciona con algunos de estos aspectos y el porcentaje de seguridad que tiene usted sobre ello.</h3>
			<table class="tabla">
				<thead>
					<tr>
						<th>Aspecto</th>
						<th>Si/No</th>
						<th>Conocimiento y certeza que se tiene sobre ello</th>
						<th>especifique el caso</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>ACCIDENTES</td>
						<td class="text-center">{{$entrevista->marca_x->r1}}</td>
						<td class="text-center">{{$entrevista->marca_x->r1_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r1_3}}</td>
					</tr>
					<tr>
						<td>PROBLEMAS CONDUCTUALES</td>
						<td class="text-center">{{$entrevista->marca_x->r2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r2_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r2_3}}</td>
					</tr>
					<tr>
						<td>USO DE ALCOHOL</td>
						<td class="text-center">{{$entrevista->marca_x->r3}}</td>
						<td class="text-center">{{$entrevista->marca_x->r3_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r3_3}}</td>
					</tr>
					<tr>
						<td>USO DE DROGAS</td>
						<td class="text-center">{{$entrevista->marca_x->r4}}</td>
						<td class="text-center">{{$entrevista->marca_x->r4_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r4_3}}</td>
					</tr>
					<tr>
						<td>FUMA CIGARRILLOS</td>
						<td class="text-center">{{$entrevista->marca_x->r5}}</td>
						<td class="text-center">{{$entrevista->marca_x->r5_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r5_3}}</td>
					</tr>
					<tr>
						<td>ENFERMEDADES</td>
						<td class="text-center">{{$entrevista->marca_x->r6}}</td>
						<td class="text-center">{{$entrevista->marca_x->r6_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r6_3}}</td>
					</tr>
					<tr>
						<td>ALERGIAS</td>
						<td class="text-center">{{$entrevista->marca_x->r7}}</td>
						<td class="text-center">{{$entrevista->marca_x->r7_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r7_3}}</td>
					</tr>
					<tr>
						<td>BAJO TRATAMIENTO MÉDICO</td>
						<td class="text-center">{{$entrevista->marca_x->r8}}</td>
						<td class="text-center">{{$entrevista->marca_x->r8_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r8_3}}</td>
					</tr>
					<tr>
						<td>MALA NUTRICIÓN</td>
						<td class="text-center">{{$entrevista->marca_x->r9}}</td>
						<td class="text-center">{{$entrevista->marca_x->r9_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r9_3}}</td>
					</tr>
					<tr>
						<td>PROBLEMAS DE ATENCIÓN</td>
						<td class="text-center">{{$entrevista->marca_x->r10}}</td>
						<td class="text-center">{{$entrevista->marca_x->r10_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r10_3}}</td>
					</tr>
					<tr>
						<td>PROBLEMAS DE LENGUAJE</td>
						<td class="text-center">{{$entrevista->marca_x->r11}}</td>
						<td class="text-center">{{$entrevista->marca_x->r11_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r11_3}}</td>
					</tr>
					<tr>
						<td>REPETIDOR DE GRADO ESCOLAR</td>
						<td class="text-center">{{$entrevista->marca_x->r12}}</td>
						<td class="text-center">{{$entrevista->marca_x->r12_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r12_3}}</td>
					</tr>
					<tr>
						<td>AMISTADES SANAS</td>
						<td class="text-center">{{$entrevista->marca_x->r13}}</td>
						<td class="text-center">{{$entrevista->marca_x->r13_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r13_3}}</td>
					</tr>
					<tr>
						<td>ADICTO A LA  INTERNET</td>
						<td class="text-center">{{$entrevista->marca_x->r14}}</td>
						<td class="text-center">{{$entrevista->marca_x->r14_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r14_3}}</td>
					</tr>
					<tr>
						<td>ADICTO A LA TELEVISIÓN</td>
						<td class="text-center">{{$entrevista->marca_x->r15}}</td>
						<td class="text-center">{{$entrevista->marca_x->r15_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r15_3}}</td>
					</tr>
					<tr>
						<td>GUSTA DE ESTUDIAR Y ASISTIR A LA ESCUELA</td>
						<td class="text-center">{{$entrevista->marca_x->r16}}</td>
						<td class="text-center">{{$entrevista->marca_x->r16_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r16_3}}</td>
					</tr>
					<tr>
						<td>TRABAJA</td>
						<td class="text-center">{{$entrevista->marca_x->r17}}</td>
						<td class="text-center">{{$entrevista->marca_x->r17_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r17_3}}</td>
					</tr>
					<tr>
						<td>ES ORDENADO</td>
						<td class="text-center">{{$entrevista->marca_x->r18}}</td>
						<td class="text-center">{{$entrevista->marca_x->r18_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r18_3}}</td>
					</tr>
					<tr>
						<td>ES DISTRAÍDO</td>
						<td class="text-center">{{$entrevista->marca_x->r19}}</td>
						<td class="text-center">{{$entrevista->marca_x->r19_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r19_3}}</td>
					</tr>
					<tr>
						<td>USA LENTES</td>
						<td class="text-center">{{$entrevista->marca_x->r20}}</td>
						<td class="text-center">{{$entrevista->marca_x->r20_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r20_3}}</td>
					</tr>
					<tr>
						<td>OTROS</td>
						<td class="text-center">{{$entrevista->marca_x->r21}}</td>
						<td class="text-center">{{$entrevista->marca_x->r21_2}}</td>
						<td class="text-center">{{$entrevista->marca_x->r21_3}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="pie">
		<h3 class="text-center">Dirección: Calle Emiliano Zapata Sur N, Sexto Barrio Emiliano Zapata, 90140 Panotla, Tlax. <br>
		 	Teléfono: 246 462 5147
		 </h3>
	</div><hr>
	<header class="cabeza">		
		<h2>Colegio de Bachilleres del estado de Tlaxcala Cobat Plantel 11</h2>		
	</header>		
	<div class="container">
		<div class="section">												
			<h3 class="title text-center">Selecciona SI o NO en las características y cualidades que consideres que tiene o no su hijo (a).</h3>
			<table class="tabla">
				<tbody>
					<tr>
						<td>ALEGRE</td>
						<td>{{$entrevista->marca_si_no->respuesta1}}</td>
						<td>CARIÑOSO</td>
						<td>{{$entrevista->marca_si_no->respuesta10}}</td>
					</tr>
					<tr>
						<td>TRISTE</td>
						<td>{{$entrevista->marca_si_no->respuesta2}}</td>
						<td>FRIO</td>
						<td>{{$entrevista->marca_si_no->respuesta11}}</td>
					</tr>
					<tr>
						<td>AGRESIVO</td>
						<td>{{$entrevista->marca_si_no->respuesta3}}</td>
						<td>OBEDIENTE</td>
						<td>{{$entrevista->marca_si_no->respuesta13}}</td>
					</tr>
					<tr>
						<td>DOCIL</td>
						<td>{{$entrevista->marca_si_no->respuesta4}}</td>
						<td>MENTIROSO</td>
						<td>{{$entrevista->marca_si_no->respuesta13}}</td>
					</tr>
					<tr>
						<td>TRANQUILO</td>
						<td>{{$entrevista->marca_si_no->respuesta5}}</td>
						<td>MIEDOSO</td>
						<td>{{$entrevista->marca_si_no->respuesta14}}</td>
					</tr>
					<tr>
						<td>INQUIETO</td>
						<td>{{$entrevista->marca_si_no->respuesta6}}</td>
						<td>VALIENTE</td>
						<td>{{$entrevista->marca_si_no->respuesta15}}</td>
					</tr>
					<tr>
						<td>IMAGINATIVO</td>
						<td>{{$entrevista->marca_si_no->respuesta7}}</td>
						<td>DISTRAIDO</td>
						<td>{{$entrevista->marca_si_no->respuesta16}}</td>
					</tr>
					<tr>
						<td>REALISTA</td>
						<td>{{$entrevista->marca_si_no->respuesta8}}</td>
						<td>ATENTO</td>
						<td>{{$entrevista->marca_si_no->respuesta17}}</td>
					</tr>
					<tr>
						<td>EXPRESIVO</td>
						<td>{{$entrevista->marca_si_no->respuesta9}}</td>
						<td>INTROVERTIDO</td>
						<td>{{$entrevista->marca_si_no->respuesta18}}</td>
					</tr>					
				</tbody>
			</table>
			<h4 style="font-family: Arial">Describa brevemente como es su hijo (a)</h4>
			<p style="font-family: Arial">{{$entrevista->marca_si_no->respuesta19}}</p>

			<h4 style="font-family: Arial">¿Con que persona considera usted que su hijo tiene más confianza? </h4>
			<p style="font-family: Arial">{{$entrevista->marca_si_no->respuesta20}}</p>

			<h3 class="text-center">Gracias por compartir esta información usted es lo más importante para nosotros.</h3>
		</div>
	</div>	
</body>
</html>