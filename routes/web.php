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

Route::get('/', ['as' => 'welcome',function () {
    		return view('home');
}]);


//Rutas de acceso para crear alumno
Route::group(['middleware' => ['auth', 'acceso']], function(){
		//Route::resource('acceso','AccesoController');
	Route::get('acceso', [
		'uses' 	=> 'Auth\RegisterController@showRegistrationForm',
		'as'	=> 'createacces'
	]);
    Route::post('acceso', [
    	'uses'	=>	'Auth\RegisterController@register',
    	'as'	=>	'createacces'
    ]);
});

//Rutas para jefes u otros

Route::group(['prefix'=>'otros', 'middleware' => ['auth','jefeotros']], function(){
	Route::get('/', ['as' => 'index',function () {
    		return view('jefeotro.index');
		}]);
});

//Rutas para administrador
Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

	Route::group(['middleware' => 'admin'], function()
	{
		Route::get('/', ['as' => 'index',function () {
    		return view('welcome');
		}]);
		//Rutas para crear y administrar a los usuarios de tipo otro
		Route::resource('users','UsersController');

		Route::get('users/{id}/destroy',[
			'uses' => 'UsersController@destroy',
			'as' => 'admin.users.destroy'
		]);	
		//Rutas para crear y administrar los accesos
		Route::resource('accesos','AccesosController');

		Route::get('accesos/{id}/destroy',[
			'uses' => 'AccesosController@destroy',
			'as' => 'admin.accesos.destroy'
		]);	
		//Rutas para crear y administrar a los usuarios de tipo jefe de carrera 
		Route::resource('jefecarrera','JefeCarreraController');

		Route::get('jefecarrera/{id}/destroy',[
			'uses' => 'JefeCarreraController@destroy',
			'as' => 'admin.jefecarrera.destroy'
		]);
	});
});

//Rutas para los alumnos
Route::group(['prefix'=>'alumno', 'middleware' => ['auth', 'alumno']], function(){

	//Rutas para el perfil del alumno
	Route::get('/', ['as' => 'welcome',function () {
    	return view('alumno.index');
	}]);
	Route::resource('perfil','AlumnoController');
	Route::get('perfil',[
		'uses' 	=> 'AlumnoController@perfil',
		'as' 	=> 'perfil'
	]);

	Route::get('perfil/{id}/edit',[
		'uses' 	=> 'AlumnoController@edit',
		'as' 	=> 'perfil.editardatos'
	]);

	//Rutas para realizar la solicitud del servicio social
	Route::resource('solicitud','ProgramaController');



});

//Rutas para iniciar sesion para los demas roles
Route::get('login', [
	'uses'	=> 'Auth\LoginController@showLoginForm',
	'as'	=> 'login'
]);

Route::post('login', [
	'uses'	=> 'Auth\LoginController@login',
	'as'	=> 'login'
]);

Route::get('logout', [
	'uses'	=> 'Auth\LoginController@logout',
	'as'	=> 'logout'
]);


Route::get('/home', 'HomeController@index')->name('home');
