
<?php

Route::get('/', function () {	
	return view('welcome');
});

Route::post('/logout', 'Auth\LogoutController@logout')->name('all.logout'); //Cerrar sesión para alumno, docente y padreF

/////////LOGINS
Route::get('/alumno/login','Auth\Alumno\AlumnoLoginController@showLoginForm')->name('alumno.login');
Route::post('/alumno/login','Auth\Alumno\AlumnoLoginController@login');
Route::get('/docente/login','Auth\Docente\DocenteLoginController@showLoginForm')->name('docente.login');
Route::post('/docente/login','Auth\Docente\DocenteLoginController@login');
Route::get('/padre/login','Auth\Padre_familia\PadreLoginController@showLoginForm')->name('padre.login');
Route::post('/padre/login','Auth\Padre_familia\PadreLoginController@login');
/////////LOGINS

Route::middleware(['auth:alumno'])->prefix('/alumno')->group(function(){
	Route::get('/', 'Alumno\AlumnoController@index');
	Route::get('/{nia}/edit','Alumno\AlumnoController@edit');
	Route::post('/{nia}/edit','Alumno\AlumnoController@update');
	Route::get('/{nia}/parentezco','Parentezco\ParentezcoController@alumno_create');
	Route::post('/{nia}/parentezco','Parentezco\ParentezcoController@alumno_store');
	Route::post('/{alumno_id}/parentezco/{padre_id}/delete','Parentezco\ParentezcoController@alumno_destroy');	
	Route::get('/{nia}/domicilio', 'Domicilio\DomicilioController@alumno_create');//Mostrar la vista
	Route::post('/{nia}/domicilio', 'Domicilio\DomicilioController@alumno_store');//Agregar el domicilio
	Route::post('/{nia}/domicilio/{domicilio_id}/delete', 'Domicilio\DomicilioController@alumno_destroy'); //eliminar
	//Entrevistas
	Route::get('/entrevista','Alumno\Entrevista_fresca\EntrevistaAlumnoController@index');
	Route::post('/entrevista','Alumno\Entrevista_fresca\EntrevistaAlumnoController@store');
	Route::get('/entrevista/datos/familiares','Alumno\Entrevista_fresca\DatosFamiliaresController@create');
	Route::post('/entrevista/datos/familiares','Alumno\Entrevista_fresca\DatosFamiliaresController@store');
	Route::get('/entrevista/datos/academicos','Alumno\Entrevista_fresca\DatosAcademicosController@create');
	Route::post('/entrevista/datos/academicos','Alumno\Entrevista_fresca\DatosAcademicosController@store');	
	Route::get('/entrevista/habitos/estudio','Alumno\Entrevista_fresca\HabitosEstudioController@create');
	Route::post('/entrevista/habitos/estudio','Alumno\Entrevista_fresca\HabitosEstudioController@store');
	Route::get('/entrevista/otras/actividades','Alumno\Entrevista_fresca\OtrasActividadesController@create');
	Route::post('/entrevista/otras/actividades','Alumno\Entrevista_fresca\OtrasActividadesController@store');
	Route::get('/entrevista/datos/adicionales','Alumno\Entrevista_fresca\DatosAdicionalesController@create');
	Route::post('/entrevista/datos/adicionales','Alumno\Entrevista_fresca\DatosAdicionalesController@store');
	//FINALIZAR ENTREVISTA
	Route::post('/finalizar/entrevista','Alumno\Entrevista_fresca\EntrevistaAlumnoController@update');
});

Route::middleware(['auth:padre'])->prefix('/padre_familia')->group(function (){
	Route::get('/', 'Padre_familia\PadreController@index');
	Route::get('/{id}/edit','Padre_familia\PadreController@edit');
	Route::post('/{id}/edit','Padre_familia\PadreController@update');
	Route::get('/{id}/domicilio', 'Domicilio\DomicilioController@padre_create');
	Route::post('/{id}/domicilio', 'Domicilio\DomicilioController@padre_store');
	Route::post('/{padre_id}/domicilio/{domicilio_id}/delete', 'Domicilio\DomicilioController@padre_destroy');
	Route::get('/{id}/parentezco','Parentezco\ParentezcoController@padre_create');
	Route::post('/{id}/parentezco','Parentezco\ParentezcoController@padre_store');
	Route::post('/{padre_id}/parentezco/{alumno_id}/delete','Parentezco\ParentezcoController@padre_destroy');
	Route::get('/entrevista','Padre_familia\Entrevista_fresca\EntrevistaPadreController@index');
	Route::post('/entrevista','Padre_familia\Entrevista_fresca\EntrevistaPadreController@store');
	Route::get('/entrevista/{alumno_id}/secciones','Padre_familia\Entrevista_fresca\EntrevistaPadreController@secciones');
	Route::post('/entrevista/{alumno_id}/secciones','Padre_familia\Entrevista_fresca\EntrevistaPadreController@update');
	Route::get('/entrevista/{alumno_id}/marca_x','Padre_familia\Entrevista_fresca\MarcaXController@create');
	Route::post('/entrevista/{alumno_id}/marca_x','Padre_familia\Entrevista_fresca\MarcaXController@store');
	Route::get('/entrevista/{alumno_id}/marca_si_no','Padre_familia\Entrevista_fresca\MarcaSiNoController@create');
	Route::post('/entrevista/{alumno_id}/marca_si_no','Padre_familia\Entrevista_fresca\MarcaSiNoController@store');
});


Route::middleware(['auth:docente'])->prefix('/docente')->group(function () {
	Route::get('/' , 'Docente\DocenteController@index'); // Muestra el panel de control para los docentes en general
	Route::get('/{id}/edit' , 'Docente\DocenteController@edit');
	Route::post('/{id}/edit' , 'Docente\DocenteController@update');
	Route::get('/tutorias' , 'Docente\DocenteController@tutorias');	
	Route::get('/{id}/domicilio','Domicilio\DomicilioController@docente_create');//mostrar
	Route::post('/{id}/domicilio','Domicilio\DomicilioController@docente_store'); // agregar
	Route::post('/{docente_id}/domicilio/{domicilio_id}/delete','Domicilio\DomicilioController@docente_destroy');
	
	Route::get('/entrevista/alumno/{alumno_id}/view','Docente\DocenteController@entrevista_alumno');
	Route::get('/entrevista/padre_familia/alumno/{alumno_id}/view','Docente\DocenteController@entrevista_padre');
	Route::get('/entrevista_fresca_padre_familia/{alumno_id}','Docente\tutorias_Pdf\PdfController@pdf_padre');
	Route::get('/entrevista_fresca_alumno/{alumno_id}','Docente\tutorias_Pdf\PdfController@pdf_alumno');	
});

//CRUD DIRECTOR
Route::middleware(['auth:docente'])->prefix('director/')->namespace('Director')->group(function () { 
	//DOCENTE
	Route::get('/docentes/index','docente\DocenteController@index');
	Route::get('/docente/create', 'docente\DocenteController@create');
	Route::post('/docente', 'docente\DocenteController@store'); //Mostrar la vista para crear docentes
	Route::get('/docente/{id}/edit', 'docente\DocenteController@edit'); //Identificamos que docente se va a editar
	Route::post('/docente/{id}/edit', 'docente\DocenteController@update'); //Actualizamos los datos del docente}
	Route::post('/docente/{id}/delete', 'docente\DocenteController@destroy'); //Eliminamos al docente seleccionado
	Route::get('/docente/{id}/view','docente\DocenteController@show'); //Mostrar a datos del docente (puestos y materias)
	//Asignación de puestos para el docente indicado
	Route::get('/docente/{id}/puestos', 'docente\AsignarPuestosDocenteController@index');
	Route::post('/docente/{id}/puesto','docente\AsignarPuestosDocenteController@store');	
	Route::post('/docente/{docente_id}/puesto/{puesto_id}/delete','docente\AsignarPuestosDocenteController@destroy');
	//Asignación de materias para el docente indicado
	Route::get('/docente/{id}/materias', 'docente\AsignarMateriasDocenteController@index');
	Route::post('/docente/{id}/materias', 'docente\AsignarMateriasDocenteController@store');
	Route::post('/docente/{docente_id}/materia/{materia_id}/delete', 'docente\AsignarMateriasDocenteController@destroy');
	//PUESTOS
	Route::get('/puestos/index','puesto\PuestoController@index');
	Route::get('/puestos/create','puesto\PuestoController@create');
	Route::post('/puestos/create','puesto\PuestoController@store');
	Route::get('/puestos/{id}/edit', 'puesto\PuestoController@edit');
	Route::post('/puestos/{id}/edit', 'puesto\PuestoController@update');
	Route::post('/puestos/{id}/delete', 'puesto\PuestoController@destroy');
   	//Asignacion de docentes para el puesto indicado
	Route::get('/puesto/{id}/docentes', 'puesto\PuestoController@show');
	Route::post('/puesto/{id}/docentes', 'puesto\PuestoController@agregarPuesto');
	Route::post('/puesto/{puesto_id}/docentes/{docente_id}/delete', 'puesto\PuestoController@eliminarPuesto');
	//ALUMNO	
	Route::get('/alumnos/index','alumno\AlumnoController@index');
	Route::get('/alumno/create','alumno\AlumnoController@create');
	Route::post('/alumno/create','alumno\AlumnoController@store');
	Route::get('/alumno/{nia}/edit','alumno\AlumnoController@edit');
	Route::post('/alumno/{nia}/edit','alumno\AlumnoController@update');
	Route::post('/alumno/{nia}/delete','alumno\AlumnoController@destroy');	
	Route::get('/alumno/search','buscador\SearchController@showAlumno');//Buscar un alumno 	
	Route::get('/alumno/{alumno}/show','alumno\AlumnoController@show');//Mostrar los datos del alumno	
	//Asignar parentezco de alumnos para el padre de familia indicado
	Route::get('/alumno/{nia}/familiares','alumno\AsignarFamiliarAlumnoController@index');
	Route::post('/alumno/{nia}/familiares','alumno\AsignarFamiliarAlumnoController@store');
	Route::post('/alumno/{nia}/familiares/{padre_id}/delete','alumno\AsignarFamiliarAlumnoController@destroy');
	//PADRE DE FAMILIA
	Route::get('/padres_familia/index','padre_familia\PadreFamiliaController@index');
	Route::get('/padre_familia/create','padre_familia\PadreFamiliaController@create');
	Route::post('/padre_familia/create','padre_familia\PadreFamiliaController@store');
	Route::get('/padre_familia/{id}/edit','padre_familia\PadreFamiliaController@edit');
	Route::post('/padre_familia/{id}/edit','padre_familia\PadreFamiliaController@update');
	Route::post('/padre_familia/{id}/delete','padre_familia\PadreFamiliaController@destroy');
	//Buscar padre de familia
	Route::get('/padre_familia/search','buscador\SearchController@showPadre');
	//Mostrar los datos del padre de familia
	Route::get('/padre_familia/{id}/show','padre_familia\PadreFamiliaController@show');
	//Asignar parentezco de alumnos para el padre de familia indicado
	Route::get('/padre_familia/{id}/alumnos','padre_familia\AsignarAlumnosPadreController@index');
	Route::post('/padre_familia/{id}/alumnos','padre_familia\AsignarAlumnosPadreController@store');
	Route::post('/padre_familia/{padre_id}/alumnos/{alumno_id}/delete','padre_familia\AsignarAlumnosPadreController@destroy');
	//MATERIAS
	Route::get('/materias/index', 'materia\MateriaController@index');
	Route::get('/materia/create', 'materia\MateriaController@create');
	Route::post('/materia/create', 'materia\MateriaController@store');
	Route::get('/materia/{id}/edit', 'materia\MateriaController@edit');
	Route::post('/materia/{id}/edit', 'materia\MateriaController@update');
	Route::post('/materia/{id}/delete', 'materia\MateriaController@destroy');
	//Asignar docentes para la materia indicada	
	Route::get('/materia/{id}/docentes','materia\AsignarMateriasController@index'); //Mostrar vista para asignar materia
	Route::post('/materia/{id}/docentes','materia\AsignarMateriasController@store');//Asignar materia a los docentes
	//quitar materia asignada para el docente
	Route::post('/materia/{materia_id}/docentes/{docente_id}/delete','materia\AsignarMateriasController@destroy'); 
	//Agregar direcciones
	Route::get('/domicilios/index','domicilio\DomicilioController@index');
	Route::get('/domicilio/create','domicilio\DomicilioController@create');
	Route::post('/domicilio/create','domicilio\DomicilioController@store');
	Route::get('/domicilio/{id}/edit', 'domicilio\DomicilioController@edit');
	Route::post('/domicilio/{id}/edit', 'domicilio\DomicilioController@update');
	Route::post('/domicilio/{id}/delete', 'domicilio\DomicilioController@destroy');
	//Asignar domicilio para Docente, Alumno y Padre
	Route::get('padre_familia/{id}/domicilio', 'domicilio\AsignarDomicilioController@padre_create');
	Route::post('padre_familia/{id}/domicilio', 'domicilio\AsignarDomicilioController@padre_store');
	Route::post('padre_familia/{padre_id}/domicilio/{domicilio_id}/delete', 'domicilio\AsignarDomicilioController@padre_destroy');
	//Alumno
	Route::get('alumno/{nia}/domicilio', 'domicilio\AsignarDomicilioController@alumno_create');//Mostrar la vista
	Route::post('alumno/{nia}/domicilio', 'domicilio\AsignarDomicilioController@alumno_store');//Agregar el domicilio
	Route::post('alumno/{nia}/domicilio/{domicilio_id}/delete', 'domicilio\AsignarDomicilioController@alumno_destroy');
	//Docente
	Route::get('docente/{id}/domicilio','domicilio\AsignarDomicilioController@docente_create');
	Route::post('docente/{id}/domicilio','domicilio\AsignarDomicilioController@docente_store');
	Route::post('docente/{docente_id}/domicilio/{domicilio_id}/delete','domicilio\AsignarDomicilioController@docente_destroy');
	//Grupo
	Route::get('grupos/index','grupo\GrupoController@index');
	Route::get('grupos/create','grupo\GrupoController@create');
	Route::post('grupos/create','grupo\GrupoController@store');
	Route::get('grupo/{id}/edit','grupo\GrupoController@edit');
	Route::post('grupo/{id}/edit','grupo\GrupoController@update');
	Route::post('grupo/{id}/delete', 'grupo\GrupoController@destroy');
	//Mostrar el grupo seleccionado
	Route::get('grupo/{grupo}/alumnos/show', 'grupo\GrupoController@alumnos_show');
	Route::post('grupo/{grupo_id}/alumno/{alumno_id}/delete', 'grupo\GrupoController@alumno_destroy');
	Route::get('grupo/{grupo}/materias/show', 'grupo\GrupoMateriasController@show');	
	Route::get('grupo/{id}/materias', 'grupo\GrupoMateriasController@create');
	Route::post('grupo/{id}/materias', 'grupo\GrupoMateriasController@store');	
	Route::post('grupo/{grupo_id}/materia/{materia_id}/delete', 'grupo\GrupoMateriasController@materia_destroy');

});


	//ENTREVISTA
