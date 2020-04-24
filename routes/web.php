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

Route::get('/', 'pagesController@index');


Route::get('/ajuda', 'pagesController@ajuda');

Route::get('/configuracoes', 'pagesController@configuracoes');

Route::get('/doadores', 'pagesController@doadores');

Route::get('/hemocentros', 'pagesController@hemocentros');

Route::get('/campanhas', 'pagesController@campanhas');

Route::get('/requisicoes', 'pagesController@requisicoes');

Route::get('/usuarios', 'pagesController@usuarios');

// Route::get('/doadores', function () {
//     return view('pages.doadores');
// });
