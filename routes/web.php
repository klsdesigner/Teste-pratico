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

//use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'Painel', 'namespace' => 'Painel'], function () {

    Route::get('/index', 'PainelController@index')->name('painel.index');

    Route::get('/user', 'UserController@index')->name('user.index');

    //Rotas Veiculo   
    Route::get('veiculos', 'VeiculosController@index')->name('veiculos.index');
    Route::get('veiculos/create', 'VeiculosController@create')->name('veiculos.create');
    Route::post('veiculos/store', 'VeiculosController@store')->name('veiculos.store');
    Route::get('veiculos/{id}/edit', 'VeiculosController@edit')->name('veiculos.edit');
    Route::put('veiculos/update', 'VeiculosController@update')->name('veiculos.update');

    Route::post('veiculos/destroy/{id}', 'VeiculosController@destroy')->name('veiculos.destroy');

    
});

