<?php

use Illuminate\Http\Request;
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
    return '<h1>Bem vindo ao PGEA</h1>';
});

//login
Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Route::get('index', function (){
    return view('layout/temp');
});

//extenssoes
Route::get('/extensoes', 'ExtensaoController@lista');
Route::get('/extensoes/mostra/{id}', 'ExtensaoController@mostra')->where('id', '[0-9]+');
Route::get('/extensoes/nova', 'ExtensaoController@nova');
Route::post('/extensoes/adiciona', 'ExtensaoController@adiciona');
Route::get('/extensoes/remove/{id}', 'ExtensaoController@remove')->where('id', '[0-9]+');

//profissional
Route::get('/profissional', 'ProfissionalController@Index');
Route::get('/profissional/show/{id}', 'ProfissionalController@show')->where('id', '[0-9]+');
Route::get('/profissional/create', 'ProfissionalController@create');
Route::post('/profissional/store', 'ProfissionalController@store');
Route::patch('/profissinal/edit/{id}', 'ProfissionalController@edit')->where('id', '[0-9]+');
Route::get('/profissional/destroy/{id}', 'profissionalController@destroy')->where('id', '[0-9]+');

Route::get('teste', function (){
    return view('teste');
});






//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
