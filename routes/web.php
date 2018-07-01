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
    return view('welcome');
});

Route::get('/listar/areas', "AreaController@listarAreas");

Route::get('/cadastrar/area', function (Request $request) {
			return view('cadastrarArea');
});

Route::get('/remover/area', function(Request $request){
				return view('removerArea');	
});

Route::get('/atualizar/area', function(Request $request){
				return view('atualizarArea');	
});

Route::post('/cadastrar/area', "AreaController@cadastrarArea");

Route::post('/remover/area', "AreaController@removerArea");

Route::post('/atualizar/area', "AreaController@atualizarArea");