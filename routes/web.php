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

Route::prefix('/')->group(function(){
    Route::get('/','TarefasController@list')->name('tarefas.list'); //Listagem de tarefas
    Route::get('/login', 'Auth\LoginController@index')->name('templates.login');
    Route::get('/cadastrar','Auth\RegisterController@index')->name('templates.register');
});

Route::fallback(function(){
    return view('erros.404');
});
