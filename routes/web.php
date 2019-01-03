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
    return view('index');
});

Route::get('/produtos', 'ControladorProduto@indexView');
Route::get('/produto/{categoria_id}', 'ControladorProduto@produto');
Route::get('/categorias', 'ControladorCategoria@index');
Route::get('/sl', 'SlController@index');
Route::get('/categorias/novo', 'ControladorCategoria@create');
Route::get('/sl/novo', 'SlController@create');
Route::post('/categorias', 'ControladorCategoria@store');
Route::post('/sl', 'SlController@store');
Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy');
Route::get('/sl/apagar/{id}', 'SlController@destroy');
Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit');
Route::get('/sl/editar/{id}', 'SlController@edit');
Route::post('/categorias/{id}', 'ControladorCategoria@update');
Route::post('/sl/{id}', 'SlController@update');
Route::get('/test', 'ControladorProduto@index');

Route::get('/CadastroMenu', 'Controlador_Menu_Superior@index');
Route::get('/CadastroMenu/novo_item', 'Controlador_Menu_Superior@create'); 
Route::post('/CadastroMenu', 'Controlador_Menu_Superior@store');
Route::get('/CadastroMenu/apagar_item/{id}', 'Controlador_Menu_Superior@destroy');
Route::get('/CadastroMenu/editar/{id}', 'Controlador_Menu_Superior@edit');
Route::post('/CadastroMenu/{id}', 'Controlador_Menu_Superior@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/admin', 'AdminController@index')->name('admin');


