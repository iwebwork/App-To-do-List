<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tarefas', function (Request $request){
    return ['test' => true];
});

Route::patch('/tarefa/alterarTarefa/{idTarefa}/{idStatus}', 'TarefasController@editAction');
Route::get('/tarefa/selecionarTarefa/{idTarefa}', 'TarefasController@selecionarEvento');
Route::post('/tarefa/editarTarefa/','TarefasController@edit')->name('tarefas.edit');
Route::post('/tarefa/adicionarTarefa/','TarefasController@addAction')->name('tarefas.addAction');
Route::post('/lista/adicionarLista/','CardController@addListAction')->name('Card.addListAction');
Route::delete('/tarefa/deletarTarefa/{idTarefa}', 'TarefasController@delAction');




