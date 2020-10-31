
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {	
    return view('welcome');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/admin/register','Admin\AdminRegisterController@showRegisterForm');
Route::post('/admin/register','Admin\AdminRegisterController@register');
Route::get('/admin/login','Admin\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Admin\AdminLoginController@login');
Route::get('/admin', 'AdminController@index'); No hacer caso >:v*/ 

Route::post('/logout', 'Auth\LogoutController@logout')->name('all.logout'); //Cerrar sesión para alumno, docente y padreF

Route::get('/alumno/login','Auth\Alumno\AlumnoLoginController@showLoginForm')->name('alumno.login');
Route::post('/alumno/login','Auth\Alumno\AlumnoLoginController@login');
Route::get('/alumno', 'AlumnoController@index');




Route::get('/docente/login','Auth\Docente\DocenteLoginController@showLoginForm')->name('docente.login');
Route::post('/docente/login','Auth\Docente\DocenteLoginController@login');

Route::middleware(['auth:docente'])->prefix('/docente')->group(function () {
	Route::get('/' , 'Docente\DocenteController@index');
});

/*Route::get('/docente/register','Auth\Docente\DocenteRegisterController@showRegisterForm');
Route::post('/docente/register','Auth\Docente\DocenteRegisterController@register');*/

//CRUD
Route::middleware(['auth:docente'])->prefix('director/')->group(function () { //Estas rutas solo podra accede el director
	
	//Route::get('/index', 'Docente\Director\IndexController@index');
	//DOCENTE
	Route::get('/docentes/index','Director\DocenteController@index');
	Route::get('/docente/create', 'Director\DocenteController@create');
	Route::post('/docente', 'Director\DocenteController@store'); //Mostrar la vista para crear docentes
	Route::get('/docente/{id}/edit', 'Director\DocenteController@edit'); //Identificamos que docente se va a editar
	Route::post('/docente/{id}/edit', 'Director\DocenteController@update'); //Actualizamos los datos del docente}
	Route::post('/docente/{id}/delete', 'Director\DocenteController@destroy'); //Eliminamos al docente seleccionado
	Route::get('/docente/{id}/view','Director\DocenteController@show'); //Mostrar a datos del docente (puestos y materias)
	//Asignación de puestos para el docente indicado
	Route::get('/docente/{id}/puestos', 'Director\AsignarPuestosDocenteController@index');
	Route::post('/docente/{id}/puesto','Director\AsignarPuestosDocenteController@store');	
	Route::post('/docente/{docente_id}/puesto/{puesto_id}/delete','Director\AsignarPuestosDocenteController@destroy');
	//Asignación de materias para el docente indicado
	Route::get('/docente/{id}/materias', 'Director\AsignarMateriasDocenteController@index');
	Route::post('/docente/{id}/materias', 'Director\AsignarMateriasDocenteController@store');
	Route::post('/docente/{docente_id}/materia/{materia_id}/delete', 'Director\AsignarMateriasDocenteController@destroy');

	//PUESTOS
   	Route::get('/puestos/index','Director\PuestosDocenteController@index');
   	Route::get('/puestos/create','Director\PuestosDocenteController@create');
   	Route::post('/puestos/create','Director\PuestosDocenteController@store');
   	Route::get('/puestos/{id}/edit', 'Director\PuestosDocenteController@edit');
   	Route::post('/puestos/{id}/edit', 'Director\PuestosDocenteController@update');
   	Route::post('/puestos/{id}/delete', 'Director\PuestosDocenteController@destroy');
   	//Asignacion de docentes para el puesto indicado
   	Route::get('/puesto/{id}/docentes', 'Director\PuestosDocenteController@show');
   	Route::post('/puesto/{id}/docentes', 'Director\PuestosDocenteController@agregarPuesto');
   	Route::post('/puesto/{puesto_id}/docentes/{docente_id}/delete', 'Director\PuestosDocenteController@eliminarPuesto');

	//ALUMNO	
	Route::get('/alumnos/index','Director\AlumnoController@index');
	Route::get('/alumno/create','Director\AlumnoController@create');
	Route::post('/alumno/create','Director\AlumnoController@store');
	Route::get('/alumno/{nia}/edit','Director\AlumnoController@edit');
	Route::post('/alumno/{nia}/edit','Director\AlumnoController@update');
	Route::post('/alumno/{nia}/delete','Director\AlumnoController@destroy');
	//Buscar un alumno 
	Route::get('/alumno/search','Director\SearchController@showAlumno');
	//Mostrar los datos del alumno
	Route::get('/alumno/{alumno}/show','Director\AlumnoController@show');
	//Asignar parentezco de alumnos para el padre de familia indicado
	Route::get('/alumno/{nia}/familiares','Director\AsignarFamiliarController@index');
	Route::post('/alumno/{nia}/familiares','Director\AsignarFamiliarController@store');
	Route::post('/alumno/{nia}/familiares/{padre_id}/delete','Director\AsignarFamiliarController@destroy');
	
	//PADRE DE FAMILIA
	Route::get('/padres_familia/index','Director\PadreFamiliaController@index');
	Route::get('/padre_familia/create','Director\PadreFamiliaController@create');
	Route::post('/padre_familia/create','Director\PadreFamiliaController@store');
	Route::get('/padre_familia/{id}/edit','Director\PadreFamiliaController@edit');
	Route::post('/padre_familia/{id}/edit','Director\PadreFamiliaController@update');
	Route::post('/padre_familia/{id}/delete','Director\PadreFamiliaController@destroy');
	//Buscar padre de familia
	Route::get('/padre_familia/search','Director\SearchController@showPadre');
	//Mostrar los datos del padre de familia
	Route::get('/padre_familia/{id}/show','Director\PadreFamiliaController@show');
	//Asignar parentezco de alumnos para el padre de familia indicado
	Route::get('/padre_familia/{id}/alumnos','Director\AsignarAlumnosPadreController@index');
	Route::post('/padre_familia/{id}/alumnos','Director\AsignarAlumnosPadreController@store');
	Route::post('/padre_familia/{padre_id}/alumnos/{alumno_id}/delete','Director\AsignarAlumnosPadreController@destroy');
	//MATERIAS
	Route::get('/materias/index', 'Director\MateriaController@index');
	Route::get('/materia/create', 'Director\MateriaController@create');
	Route::post('/materia/create', 'Director\MateriaController@store');
	Route::get('/materia/{id}/edit', 'Director\MateriaController@edit');
	Route::post('/materia/{id}/edit', 'Director\MateriaController@update');
	Route::post('/materia/{id}/delete', 'Director\MateriaController@destroy');
	//Asignar docentes para la materia indicada	
	Route::get('/materia/{id}/docentes','Director\AsignarMateriasController@index'); //Mostrar vista para asignar materia
	Route::post('/materia/{id}/docentes','Director\AsignarMateriasController@store');//Asignar materia a los docentes
	//quitar materia asignada para el docente
	Route::post('/materia/{materia_id}/docentes/{docente_id}/delete','Director\AsignarMateriasController@destroy'); 
	//Agregar direcciones
	Route::get('/domicilios/index','Director\DomicilioController@index');
	Route::get('/domicilio/create','Director\DomicilioController@create');
	Route::post('/domicilio/create','Director\DomicilioController@store');
	Route::get('/domicilio/{id}/edit', 'Director\DomicilioController@edit');
	Route::post('/domicilio/{id}/edit', 'Director\DomicilioController@update');
	Route::post('/domicilio/{id}/delete', 'Director\DomicilioController@destroy');
	//Asignar domicilio para Docente, Alumno y Padre
	Route::get('padre_familia/{id}/domicilio', 'Director\AsignarDomicilioController@padre_create');
	Route::post('padre_familia/{id}/domicilio', 'Director\AsignarDomicilioController@padre_store');
	Route::post('padre_familia/{padre_id}/domicilio/{domicilio_id}/delete', 'Director\AsignarDomicilioController@padre_destroy');
	//Alumno
	Route::get('alumno/{nia}/domicilio', 'Director\AsignarDomicilioController@alumno_create');//Mostrar la vista
	Route::post('alumno/{nia}/domicilio', 'Director\AsignarDomicilioController@alumno_store');//Agregar el domicilio
	Route::post('alumno/{nia}/domicilio/{domicilio_id}/delete', 'Director\AsignarDomicilioController@alumno_destroy');//Eliminar 
	//Docente
	Route::get('docente/{id}/domicilio','Director\AsignarDomicilioController@docente_create');
	Route::post('docente/{id}/domicilio','Director\AsignarDomicilioController@docente_store');
	Route::post('docente/{docente_id}/domicilio/{domicilio_id}/delete','Director\AsignarDomicilioController@docente_destroy');
	//Grupo
	Route::get('grupos/index','Director\GrupoController@index');
	Route::get('grupos/create','Director\GrupoController@create');
	Route::post('grupos/create','Director\GrupoController@store');
	Route::get('grupo/{id}/edit','Director\GrupoController@edit');
	Route::post('grupo/{id}/edit','Director\GrupoController@update');
	Route::post('grupo/{id}/delete', 'Director\GrupoController@destroy');
	//Mostrar el grupo seleccionado
	Route::get('grupo/{grupo}/alumnos/show', 'Director\GrupoController@alumnos_show');
	Route::get('grupo/{grupo}/materias/show', 'Director\GrupoController@materias_show');

});


Route::get('/padre/login','Auth\Padre_familia\PadreLoginController@showLoginForm')->name('padre.login');
Route::post('/padre/login','Auth\Padre_familia\PadreLoginController@login');
Route::get('/padre', 'PadreController@index');