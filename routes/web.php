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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::Resource('clientes','ClienteController');

Route::post('albaniles/baja/{id}','AlbanilController@baja')->name('albaniles.baja');
Route::post('albaniles/alta/{id}','AlbanilController@alta')->name('albaniles.alta');
Route::get('albaniles/eliminados','AlbanilController@eliminados');
Route::Resource('albaniles','AlbanilController');

Route::Resource('materiales','MaterialController');

Route::post('presupuestos/baja/{id}','PresupuestoController@baja')->name('presupuestos.baja');
Route::post('presupuestos/alta/{id}','PresupuestoController@alta')->name('presupuestos.alta');
Route::get('presupuestos/eliminados','PresupuestoController@eliminados');
Route::Resource('presupuestos','PresupuestoController');

Route::Resource('tipomejoras','TipomejoraController');
Route::get('pdf', 'PdfController@invoice');

Route::Resource('tipoviviendas','TipoviviendaController');

Route::Resource('materialviviendas','MaterialviviendaController');

Route::post('presupuestoviviendas/baja/{id}','PresupuestoviviendaController@baja')->name('presupuestoviviendas.baja');
Route::post('presupuestoviviendas/alta/{id}','PresupuestoviviendaController@alta')->name('presupuestoviviendas.alta');
Route::get('presupuestoviviendas/eliminados','PresupuestoviviendaController@eliminados');
Route::Resource('presupuestoviviendas','PresupuestoviviendaController');
