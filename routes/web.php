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
    return view('loja.index');
})->name('lojas.listar');
Route::get('/lojas/detalhes/{id}', function ($id) {
    return view('loja.detalhes', ['id' => $id]);
})->name('lojas.detalhes');


Route::get('/produtos/listar', function () {
    return view('produto.index');
})->name('produtos.listar');

Route::resources([
    'lojas' => 'LojaController',
    'produtos' => 'ProdutoController',
]);

Route::post('/lojas/vincular-produto', 'VincularLojaController@vincularLojaProduto')->name('lojas.vincular-produto');
Route::post('/lojas/desvincular-produto', 'VincularLojaController@desvincularLojaProduto')->name('lojas.desvincular-produto');


