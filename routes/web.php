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

Route::get('login', 'LoginController@abrirLogin')->name('login');

Route::get('principal', 'MarcacaoController@listar')->name('principal');

Route::post('logar', "LoginController@Logar")->name('login.logar');

Route::get('/', "LoginController@abrirLogin")->name("home");

Route::get('marcacao', 'MarcacaoController@abrirPaginaMarcacao')->name('marcacao');

Route::get('cadastrarCliente', 'ClienteController@abrirCadastrarCliente')->name('cliente.cadastrar');

Route::get('visualizarCliente', 'ClienteController@listarCliente')->name('cliente');

Route::get('novo', 'ClienteController@novo')->name('cliente.novo');