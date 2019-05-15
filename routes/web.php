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
//LOGIN:
Route::get('login', 'LoginController@abrirLogin')->name('login');
Route::post('logar', "LoginController@Logar")->name('login.logar');

//TELA PRINCIPAL:
Route::get('principal', 'MarcacaoController@listar')->name('principal');
Route::get('/', "LoginController@abrirLogin")->name("home");

//CLIENTE:
Route::get('cadastrarCliente', 'ClienteController@abrirCadastrar')->name('cliente.cadastrar');
Route::get('visualizarCliente', 'ClienteController@abrirListarCliente')->name('cliente');
Route::get('novoCliente', 'ClienteController@novo')->name('cliente.novo');


//FUNCIONARIO:
Route::get('cadastrarFuncionario', 'FuncionarioController@abrirCadastrar')->name('funcionario.cadastrar');
Route::get('visualizarFuncionario', 'FuncionarioController@abrirListarFuncionario')->name('funcionario');
Route::get('novoFuncionario', 'FuncionarioController@novo')->name('funcionario.novo');

//SERVIÇO:
Route::get('cadastrarServico', 'ServicoController@abrirCadastrar')->name('servico.cadastrar');
Route::get('visualizarServico', 'ServicoController@abrirListarServico')->name('servico');
Route::get('novoServico', 'ServicoController@novo')->name('servico.novo');