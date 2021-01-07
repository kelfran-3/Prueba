<?php

use Illuminate\Support\Facades\Route;

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


Route::view('/','home')->name('inicio');
Route::view('/example','example')->name('example');

Route::view('/contact','contact')->name('contact');
route::view('/prueba', 'prueba')->name('prueba');
Route::get('/portfolio', 'projectcontroller@index')->name('projects.index');
Route::get('/portfolio/crear', 'projectcontroller@create')->name('projects.create')->middleware('auth');
Route::get('/portfolio/{project}/editar', 'projectcontroller@edit')->name('projects.edit');
Route::PATCH('/portfolio/{project}', 'projectcontroller@update')->name('projects.update');

Route::delete('/portfolio/{project}', 'projectcontroller@destroy')->name('projects.destroy');// codigo para proteger nuestra pag->middleware('auth');


Route::post('/portfolio', 'projectcontroller@store')->name('projects.store');


Route::get('/portfolio/{title}', 'projectcontroller@show')->name('projects.show');

Route::view('/about','about')->name('About');
Route::view('/configuracion','inicio')->name('config');

Route::post('contact','messagecontroller@store')->name('message.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
auth::routes(['Register'=> false]);


//estados

Route::get('/estados', 'configcontroller@index')->name('estados.index');
Route::get('/estados/crear', 'configcontroller@create')->name('estados.create');
Route::get('/estados/{estados}/editar', 'configcontroller@edit')->name('estados.edit');
Route::PATCH('/estados/{estados}', 'configcontroller@update')->name('estados.update');
Route::delete('/estados/{estados}', 'configcontroller@destroy')->name('estados.destroy');
Route::post('/estados', 'configcontroller@store')->name('estados.store');
route::get('/estados/{estados}', 'configcontroller@show')->name('estados.show');

//cede

Route::get('/cedes', 'cdcontroller@index')->name('cedes.index');
Route::get('/cedes/crear', 'cdcontroller@create')->name('cedes.create');
Route::get('/cedes/{cedes}/editar', 'cdcontroller@edit')->name('cedes.edit');
Route::PATCH('/cedes/{cedes}', 'cdcontroller@update')->name('cedes.update');
Route::delete('/cedes/{cedes}', 'cdcontroller@destroy')->name('cedes.destroy');
Route::post('/cedes', 'cdcontroller@store')->name('cedes.store');
route::get('/cedes/{cedes}', 'cdcontroller@show')->name('cedes.show');


//chofer

route::get('/choferes', 'chocontroller@index')->name('choferes.index');
Route::get('/choferes/crear', 'chocontroller@create')->name('choferes.create');
Route::get('/choferes/{choferes}/editar', 'chocontroller@edit')->name('choferes.edit');
Route::PATCH('/choferes/{choferes}', 'chocontroller@update')->name('choferes.update');
Route::delete('/choferes/{choferes}', 'chocontroller@destroy')->name('choferes.destroy');
Route::post('/choferes', 'chocontroller@store')->name('choferes.store');
route::get('/choferes/{choferes}', 'chocontroller@show')->name('choferes.show');


//gandolas
route::get('/gandolas', 'gandcontroller@index')->name('gandolas.index');
Route::get('/gandolas/crear', 'gandcontroller@create')->name('gandolas.create');
Route::get('/gandolas/{gandolas}/editar', 'gandcontroller@edit')->name('gandolas.edit');
Route::PATCH('/gandolas/{gandolas}', 'gandcontroller@update')->name('gandolas.update');
Route::post('/gandolas', 'gandcontroller@store')->name('gandolas.store');
Route::delete('/gandolas/{gandolas}', 'gandcontroller@destroy')->name('gandolas.destroy');

route::get('/gandolas/{gandolas}', 'gandcontroller@show')->name('gandolas.show');


//carga
route::get('/cargas', 'cargacontroller@index')->name('cargas.index');
Route::get('/cargas/crear', 'cargacontroller@create')->name('cargas.create');
Route::get('/cargas/{cargas}/editar', 'cargacontroller@edit')->name('cargas.edit');
Route::PATCH('/cargas/{cargas}', 'cargacontroller@update')->name('cargas.update');
Route::delete('/cargas/{cargas}', 'cargacontroller@destroy')->name('cargas.destroy');
Route::post('/cargas', 'cargacontroller@store')->name('cargas.store');


//status
route::get('/status', 'statuscontroller@index')->name('status.index');
Route::get('/status/crear', 'statuscontroller@create')->name('status.create');
Route::get('/status/{status}/editar', 'statuscontroller@edit')->name('status.edit');
Route::PATCH('/status/{status}', 'statuscontroller@update')->name('status.update');
Route::delete('/status/{status}', 'statuscontroller@destroy')->name('status.destroy');
Route::post('/status', 'statuscontroller@store')->name('status.store');

//operacions 
route::get('/operacions', 'opcontroller@index')->name('operacions.index');
Route::get('/operacions/crear', 'opcontroller@create')->name('operacions.create');
Route::get('/operacions/{operacions}/editar', 'opcontroller@edit')->name('operacions.edit');
Route::PATCH('/operacions/{operacions}', 'opcontroller@update')->name('operacions.update');
Route::delete('/operacions/{operacions}', 'opcontroller@destroy')->name('operacions.destroy');

Route::post('/operacions', 'opcontroller@store')->name('operacions.store');


