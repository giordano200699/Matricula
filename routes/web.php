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
Route::group(array('middleware' => 'auth'), function()
{
	Route::get('/home', function (Request $request) {
    	return view('home');
	});
	Route::get('/admin/documentos', function (Request $request) {
    	return view('logeado.RegistrarDocumento');
	});
	Route::get('/admin/alumnos', 'CAlumnos@mostrarAlumnos');
	Route::get('/admin/alumnos/crear','CAlumnos@crearAlumno');
	Route::post('/admin/alumnos/creando','CAlumnos@creandoAlumno');
	Route::post('/admin/alumnos/eliminar','CAlumnos@eliminarAlumno');
	Route::get('/admin/alumnos/editar/{id}','CAlumnos@editarAlumno');
	Route::post('/admin/alumnos/editando/{id}','CAlumnos@editandoAlumno');

	Route::get('/admin/tipoDocumentos','CTipoDocumento@mostrarTipoDocumentos');
	Route::get('/admin/tipoDocumentos/crear','CTipoDocumento@crearTipoDocumento');
	Route::post('/admin/tipoDocumentos/creando','CTipoDocumento@creandoTipoDocumento');
	Route::post('/admin/tipoDocumentos/eliminar','CTipoDocumento@eliminarTipoDocumento');
	Route::get('/admin/tipoDocumentos/editar/{id}','CTipoDocumento@editarTipoDocumento');
	Route::post('/admin/tipoDocumentos/editando/{id}','CTipoDocumento@editandoTipoDocumento');

	Route::get('/admin/gradosAcademicos','CGradoAcademico@mostrarGradosAcademicos');
	Route::get('/admin/gradosAcademicos/crear','CGradoAcademico@crearGradoAcademico');
	Route::post('/admin/gradosAcademicos/creando','CGradoAcademico@creandoGradoAcademico');
	Route::post('/admin/gradosAcademicos/eliminar','CGradoAcademico@eliminarGradoAcademico');
	Route::get('/admin/gradosAcademicos/editar/{id}','CGradoAcademico@editarGradoAcademico');
	Route::post('/admin/gradosAcademicos/editando/{id}','CGradoAcademico@editandoGradoAcademico');

	Route::get('/admin/documentos','CDocumento@mostrarDocumentos');
	Route::get('/admin/documentos/crear','CDocumento@crearDocumento');
});
// Route::middleware('auth:auth')->get('/home', function (Request $request) {
//     return view('home');
// });
