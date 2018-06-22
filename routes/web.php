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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/caja', 'FacturasController@mesas')->name('caja');
Route::get('/caja/mesa/{id}', 'FacturasController@abrirFactura')->name('factura');
Route::post('/agregar_producto', 'FacturasController@agregarProducto')->name('agregar-producto');
Route::post('/caja/mesa/{id}', 'FacturasController@pagar')->name('pagar');
Route::get('/facturas', 'FacturasController@index')->name('facturas');
Route::get('/facturas/{id}', 'FacturasController@show')->name('ver_factura');
Route::get('/agreger_base', 'Admin\ContabilidadController@agregar_base')->name('agregar_base');
Route::post('/agregar_contabiliad', 'Admin\ContabilidadController@agregar_contabiliad')->name('agregar_contabiliad');
Route::get('/cerrar_caja', 'Admin\ContabilidadController@cerrar_caja')->name('cerrar_caja');
Route::resource('contabilidad', 'Admin\ContabilidadController');


//Administrativas
Route::resource('inventario', 'Admin\InventarioController');
