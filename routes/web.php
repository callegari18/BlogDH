<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/ola', 'OlaController@olaSimples');


// Route::get ('/ola/{nome}', 'OlaController@ola');

Route::get('/', 'BlogController@index')->name('index');
Route::get('/sobre', 'BlogController@sobre')->name('sobre');
Route::get('/busca/{texto?}', 'BlogController@busca')->name('busca');

Route::get('/post/cria', 'BlogController@criapost')->name('criapost');

//Só aceitamos post que deve vir de um formulário
Route::post('/post/salva', 'BlogController@salvapost')->name('salvapost');