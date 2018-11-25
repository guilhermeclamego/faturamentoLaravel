<?php

Route::get('/', function () {
    return '<h1>Primeira lógica com laravel</h1> ';//view('welcome');
});

//Rotas do Produto
Route::get('/produtos', "ProdutoController@lista")->middleware('auth');
Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/busca/{id}', 'ProdutoController@busca')->where('id', '[0-9]+');;
Route::post('/produtos/altera', 'ProdutoController@altera');

//Rotas da Produto
Route::get('/pessoas', "PessoaController@lista")->middleware('auth');
Route::get('/pessoas', 'PessoaController@lista');
Route::get('/pessoas/mostra/{id}', 'PessoaController@mostra')->where('id', '[0-9]+');
Route::get('/pessoas/novo', 'PessoaController@novo');
Route::post('/pessoas/adiciona', 'PessoaController@adiciona');
Route::get('/pessoas/remove/{id}', 'PessoaController@remove');
Route::get('/pessoas/busca/{id}', 'PessoaController@busca')->where('id', '[0-9]+');;
Route::post('/pessoas/altera', 'PessoaController@altera');

//Rotas da Condição da Pagamento
Route::get('/condpags', "CondpagController@lista")->middleware('auth');
Route::get('/condpags', 'CondpagController@lista');
Route::get('/condpags/novo', 'CondpagController@novo');
Route::post('/condpags/adiciona', 'CondpagController@adiciona');
Route::get('/condpags/remove/{id}', 'CondpagController@remove');
Route::get('/condpags/busca/{id}', 'CondpagController@busca')->where('id', '[0-9]+');;
Route::post('/condpags/altera', 'CondpagController@altera');
                        

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
