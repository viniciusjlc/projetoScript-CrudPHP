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

Route::get('cadastrarFuncionario', 'FuncionarioController@abrirCadastrarFuncionario')->name('funcionario.cadastrar');

Route::get('cadastrarCliente', 'ClienteController@abrirCadastrarCliente')->name('cliente.cadastrar');

Route::get('visualizarCliente', 'ClienteController@abrirListarCliente')->name('cliente');

Route::get('visualizarFuncionario', 'FuncionarioController@abrirListarFuncionario')->name('funcionario');

Route::get('novoCliente', 'ClienteController@novo')->name('cliente.novo');

Route::get('novoFuncionario', 'FuncionarioController@novo')->name('funcionario.novo');