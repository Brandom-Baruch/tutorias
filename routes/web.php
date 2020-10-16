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

Route::post('logout', 'Auth\LogoutController@logout')->name('all.logout'); //Cerrar sesión para alumno, docente y padreF

Route::get('/alumno/login','Auth\Alumno\AlumnoLoginController@showLoginForm')->name('alumno.login');
Route::post('/alumno/login','Auth\Alumno\AlumnoLoginController@login');
Route::get('/alumno', 'AlumnoController@index');


Route::get('/docente/login','Auth\Docente\DocenteLoginController@showLoginForm')->name('docente.login');
Route::post('/docente/login','Auth\Docente\DocenteLoginController@login');
/*Route::get('/docente/register','Auth\Docente\DocenteRegisterController@showRegisterForm');
Route::post('/docente/register','Auth\Docente\DocenteRegisterController@register');*/

//CRUD
Route::middleware(['auth:docente'])->prefix('director/')->group(function () { //Estas rutas solo podra accede el director
	
	Route::get('/index', 'Docente\Director\IndexController@index');
	//DOCENTE
	Route::get('/docente/create', 'Docente\Director\DocenteController@create');
	Route::post('/docente', 'Docente\Director\DocenteController@store'); //Mostrar la vista para crear docentes
	Route::get('/docente/{id}/edit', 'Docente\Director\DocenteController@edit'); //Identificamos que docente se va a editar
	Route::post('/docente/{id}/edit', 'Docente\Director\DocenteController@update'); //Actualizamos los datos del docente}
	Route::post('/docente/{id}/delete', 'Docente\Director\DocenteController@destroy'); //Eliminamos al docente seleccionado
	//ALUMNO	
	Route::get('/alumno/create','Docente\Director\AlumnoController@create');
	Route::post('/alumno/create','Docente\Director\AlumnoController@store');
	Route::get('/alumno/{nia}/edit','Docente\Director\AlumnoController@edit');
	Route::post('/alumno/{nia}/edit','Docente\Director\AlumnoController@update');
	Route::post('/alumno/{nia}/delete','Docente\Director\AlumnoController@destroy');
	//PADRE DE FAMILIA
	Route::get('/padre_familia/create','Docente\Director\PadreFamiliaController@create');
	Route::post('/padre_familia/create','Docente\Director\PadreFamiliaController@store');
	Route::get('/padre_familia/{id}/edit','Docente\Director\PadreFamiliaController@edit');
	Route::post('/padre_familia/{id}/edit','Docente\Director\PadreFamiliaController@update');
	Route::post('/padre_familia/{id}/delete','Docente\Director\PadreFamiliaController@destroy');
	//MATERIAS
	Route::get('/materia/create', 'Docente\Director\MateriaController@create');
	Route::post('/materia/create', 'Docente\Director\MateriaController@store');
	Route::get('/materia/{id}/edit', 'Docente\Director\MateriaController@edit');
	Route::get('/materia/{id}/edit', 'Docente\Director\MateriaController@update');
	Route::get('/materia/{id}/delete', 'Docente\Director\MateriaController@destroy');
});


Route::get('/padre/login','Auth\Padre_familia\PadreLoginController@showLoginForm')->name('padre.login');
Route::post('/padre/login','Auth\Padre_familia\PadreLoginController@login');
Route::get('/padre', 'PadreController@index');