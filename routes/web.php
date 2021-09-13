<?php

use Illuminate\Support\Facades\Route;
use App\Models\Unidade;
use App\Models\Cargos;
use App\Http\Controllers\FuncionarioController;

Route::get('/funcionario', function () {
	$unidades = Unidade::all();
	$cargos   = Cargos::all();
	return view('welcome', compact('unidades','cargos'));
});

Route::get('/gestor', function () {
	$unidades = Unidade::all();
	return view('welcome_gestor', compact('unidades'));
});
Route::get('/', function () {
	$unidades = Unidade::all();
	return view('apresentacao', compact('unidades'));
});

Route::post('/funcionario', 'App\Http\Controllers\FuncionarioController@salvar')->name('salvar');
Route::post('/gestor', 'App\Http\Controllers\FuncionarioController@storeGestor')->name('storeGestor');

Route::get('/apresentacao', 'App\Http\Controllers\Controller@index')->name('index');
Route::get('/mail/email', 'App\Http\Controllers\FuncionarioController@email')->name('email');
Route::get('/home', 'App\Http\Controllers\FuncionarioController@home')->name('home');
Route::get('/home2', 'App\Http\Controllers\FuncionarioController@home2')->name('home2');