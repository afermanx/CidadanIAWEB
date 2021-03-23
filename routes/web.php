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

// Rota inicial landing
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing');
//rotas Autenticação

Route::get('/login', 'Auth\UsuarioLoginController@index')->name('login');
Route::post('/login', 'Auth\UsuarioLoginController@login')->name('logar');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


//rota Dashboard
Route::get('/dashboard','homeController@dashboard')->name('painel');


//rotas Relato

Route::post('/relatos/salvar','Relatocontroller@salvar')->name("Relato.salvar");
Route::delete('/relatos/excluir','Relatocontroller@excluir')->name("Relato.excluir");
Route::post('/relatos/ver','Relatocontroller@getRelato')->name("Relato.ver");
Route::post('/relatos/alterar','Relatocontroller@alterar')->name("Relato.alterar");




