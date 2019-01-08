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

Route::get('/produtos', 'ControladorProduto@indexView')->middleware(['auth']);
Route::get('/produto/{categoria_id}', 'ControladorProduto@produto')->middleware(['auth']);
Route::get('/categorias', 'ControladorCategoria@index')->middleware(['auth']);
Route::get('/sl', 'SlController@index')->middleware(['auth']);
Route::get('/categorias/novo', 'ControladorCategoria@create')->middleware(['auth']);
Route::get('/sl/novo', 'SlController@create')->middleware(['auth']);
Route::post('/categorias', 'ControladorCategoria@store')->middleware(['auth']);
Route::post('/sl', 'SlController@store')->middleware(['auth']);
Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy')->middleware(['auth']);
Route::get('/sl/apagar/{id}', 'SlController@destroy')->middleware(['auth']);
Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit')->middleware(['auth']);
Route::get('/sl/editar/{id}', 'SlController@edit')->middleware(['auth']);
Route::post('/categorias/{id}', 'ControladorCategoria@update')->middleware(['auth']);
Route::post('/sl/{id}', 'SlController@update')->middleware(['auth']);
Route::get('/test', 'ControladorProduto@index')->middleware(['auth']);

Route::get('/CadastroMenu', 'Controlador_Menu_Superior@index')->middleware(['auth']);
Route::get('/CadastroMenu/novo_item', 'Controlador_Menu_Superior@create')->middleware(['auth']); 
Route::post('/CadastroMenu', 'Controlador_Menu_Superior@store')->middleware(['auth']);
Route::get('/CadastroMenu/apagar_item/{id}', 'Controlador_Menu_Superior@destroy')->middleware(['auth']);
Route::get('/CadastroMenu/editar/{id}', 'Controlador_Menu_Superior@edit')->middleware(['auth']);
Route::post('/CadastroMenu/{id}', 'Controlador_Menu_Superior@update')->middleware(['auth']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/teste_ryan', function () {
    return view('teste_ryan');
});


Route::get('/cart', function () {
    return view('cart');
});



Route::view('/upload', "upload");
Route::view('/novoProduto', "novoProduto");
Route::post('/store', "UserController@store");
Route::post('/produto', "ControladorProduto@store");



Route::get('/arquivos', 'PostControlador@index');
Route::post('/arquivos', 'PostControlador@store');
Route::delete('/arquivos/{id}', 'PostControlador@destroy');
Route::get('/arquivos/{id}', 'PostControlador@download');


