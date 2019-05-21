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
Route::group(['prefix' => 'cliente'], function () {
    Route::get('cadastrar', 'ClienteController@abrirCadastrar')->name('cliente.cadastrar');
    Route::get('visualizar', 'ClienteController@abrirListarCliente')->name('cliente');
    Route::post('novo', 'ClienteController@novo')->name('cliente.novo');
    Route::get('excluir/{id}', 'ClienteController@excluir')->name('cliente.excluir');
    Route::get('alterar/{id}', 'ClienteController@abrirAlterar')->name('cliente.alterar');
    Route::post('alterar/{id}', 'ClienteController@alterar')->name('cliente.editar');
});


//FUNCIONARIO:
Route::group(['prefix' => 'funcionario'], function () {
    Route::get('cadastrar', 'FuncionarioController@abrirCadastrar')->name('funcionario.cadastrar');
    Route::get('visualizar', 'FuncionarioController@abrirListarFuncionario')->name('funcionario');
    Route::get('novo', 'FuncionarioController@novo')->name('funcionario.novo');
    Route::get('excluir/{id}', 'FuncionarioController@excluir')->name('funcionario.excluir');
    Route::get('alterar/{id}', 'FuncionarioController@abrirAlterar')->name('funcionario.alterar');
    Route::post('alterar/{id}', 'FuncionarioController@alterar')->name('funcionario.editar');
});

//SERVIÇO:
Route::group(['prefix' => 'servico'], function () {
    Route::get('cadastrar', 'ServicoController@abrirCadastrar')->name('servico.cadastrar');
    Route::get('visualizar', 'ServicoController@abrirListarServico')->name('servico');
    Route::get('novo', 'ServicoController@novo')->name('servico.novo');
    Route::get('excluir/{id}', 'ServicoController@excluir')->name('servico.excluir');
    Route::get('alterar/{id}', 'ServicoController@abrirAlterar')->name('servico.alterar');
    Route::post('alterar/{id}', 'ServicoController@alterar')->name('servico.editar');
});

//MARCAÇÃO:
Route::group(['prefix' => 'marcacao'], function () {
    Route::get('cadastrar', 'MarcacaoController@abrirMarcacao')->name('marcacao.cadastrar');
    Route::get('visualizar', 'MarcacaoController@abrirListarMarcacao')->name('marcacao');
    Route::get('novo', 'MarcacaoController@novo')->name('marcacao.novo');
});