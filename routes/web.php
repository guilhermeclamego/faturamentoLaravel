<?php

Route::get('/', function () {
    return '<h1>Primeira lógica com laravel</h1> ';//view('welcome');
});

//Rotas do Produto
Route::get('/produtos', "ProdutoController@lista")->middleware('auth');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+')->middleware('auth');
Route::get('/produtos/novo', 'ProdutoController@novo')->middleware('auth');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona')->middleware('auth');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->middleware('auth');
Route::get('/produtos/busca/{id}', 'ProdutoController@busca')->where('id', '[0-9]+')->middleware('auth');
Route::post('/produtos/altera', 'ProdutoController@altera')->middleware('auth');

//Rotas da Produto
Route::get('/pessoas', "PessoaController@lista")->middleware('auth');
Route::get('/pessoas/mostra/{id}', 'PessoaController@mostra')->where('id', '[0-9]+')->middleware('auth');
Route::get('/pessoas/novo', 'PessoaController@novo')->middleware('auth');
Route::post('/pessoas/adiciona', 'PessoaController@adiciona')->middleware('auth');
Route::get('/pessoas/remove/{id}', 'PessoaController@remove')->middleware('auth');
Route::get('/pessoas/busca/{id}', 'PessoaController@busca')->where('id', '[0-9]+')->middleware('auth');
Route::post('/pessoas/altera', 'PessoaController@altera')->middleware('auth');

//Rotas da Condição da Pagamento
Route::get('/condpags', "CondpagController@lista")->middleware('auth');
Route::get('/condpags/novo', 'CondpagController@novo')->middleware('auth');
Route::post('/condpags/adiciona', 'CondpagController@adiciona')->middleware('auth');
Route::get('/condpags/remove/{id}', 'CondpagController@remove')->middleware('auth');
Route::get('/condpags/busca/{id}', 'CondpagController@busca')->where('id', '[0-9]+')->middleware('auth');;
Route::post('/condpags/altera', 'CondpagController@altera')->middleware('auth');
                        
//Rotas do Pedido
Route::get('/pedidos', "PedidoController@lista")->middleware('auth');
Route::get('/pedidos/mostra/{id}', 'PedidoController@mostra')->where('id', '[0-9]+')->middleware('auth');
Route::get('/pedidos/novo', 'PedidoController@novo')->middleware('auth');
Route::post('/pedidos/adiciona', 'PedidoController@adiciona')->middleware('auth');
Route::get('/pedidos/remove/{id}', 'PedidoController@remove')->middleware('auth');
Route::get('/pedidos/busca/{id}', 'PedidoController@busca')->where('id', '[0-9]+')->middleware('auth');
Route::post('/pedidos/altera', 'PedidoController@altera')->middleware('auth');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/login', 'auth\LoginController@login');
Route::get('auth/logout', 'auth\LogoutController@logout');