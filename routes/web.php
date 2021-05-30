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
    return view('inicio');
    });

Route::get('calzado', function () {
    return view('Calzado.index');


});
Route::get('venta', function () {
    return view('Venta.index');

});







Route::resource('calzado', 'CalzadoController');

Route::resource('venta', 'VentaController');

