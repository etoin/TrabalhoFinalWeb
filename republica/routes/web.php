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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::resource('/moradors', 'MoradorController');
Route::resource('/moradors/{morador}/MoradorContas', 'MoradorContasController');
Route::post('/moradors/{morador}/MoradorContas/mesRef', 'MoradorContasController@indexMesReferencia');

Route::resource('/contas', 'ContaController');