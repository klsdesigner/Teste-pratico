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


// Route::get('/painel/index', 'Painel\PainelController@index')->name('painel.index');

// Route::get('/painel.user', 'Painel\UserController@index')->name('user.index');

// Route::get('Painel/veiculos', 'Painel\VeiculosController@index')->name('veiculos.index');
// Route::get('Painel/veiculos/create', 'Painel\VeiculosController@create')->name('veiculos.create');
// Route::post('Painel/veiculos/store', 'Painel\VeiculosController@store')->name('veiculos.store');
// Route::get('Painel/veiculos/{id}/edit', 'Painel\VeiculosController@edit')->name('veiculos.edit');
// Route::put('Painel/veiculos/update', 'Painel\VeiculosController@update')->name('veiculos.update');
// Route::post('Painel/veiculos/destroy/{id}', 'Painel\VeiculosController@destroy')->name('veiculos.destroy');

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




// Route::resource('painel/user', 'UserController')->names( 'painel.user');
// Route::resource('painel/veiculo', 'VeiculoController')->names('painel.veiculo');

// Route::group(['prefix'=>'admin', 'as'=>'admin.'], function () {
//     //Authentication Rotes
//     $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//     $this->post('login', 'Auth\LoginController@login');
//     $this->post('logout', 'Auth\LoginController@logout')->name('logout');

//     //Password Reset
//     $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//     $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//     $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//     $this->post('password/reset', 'Auth\ResetPasswordController@reset');

//     Route::get('/home', 'HomeController@index')->name('home');
// });