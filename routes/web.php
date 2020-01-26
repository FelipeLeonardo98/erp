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
    return view('welcome');
});

Route::get('/login',"LoginController@callLogin");
Route::get('/modulos',"ModulosController@callModulos");
Route::get('/cadastro', "CadastroController@callCadastro");
Route::post('/cadastro/teste',"usuariosCadastroController@callInserirUsuario");
/*
Route::get('/contas',"ContasPagarController@listar");
Route::get('/contas/cadastro',"ContasPagarController@cadastro");
Route::post('/contas/salvar',"ContasPagarController@salvar");
// url NECESSITA ser passada por post, por isso trocamos(pois é formulário)
Route::get('/contas/editar/{id}',"ContasPagarController@editar");
Route::post('/contas/update/{id}',"ContasPagarController@update");
// url NECESSITA ser passada por post, por isso trocamos(pois é formulário)
Route::get('/contas/apagar/{id}',"ContasPagarController@apagar"); */