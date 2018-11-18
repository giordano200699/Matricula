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
	Route::get('/admin/usuarios', function (Request $request) {
    	return view('logeado.RegistrarDocumento');
	});
});
// Route::middleware('auth:auth')->get('/home', function (Request $request) {
//     return view('home');
// });
