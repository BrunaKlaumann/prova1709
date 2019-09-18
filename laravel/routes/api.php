<?php

use Illuminate\Http\Request;

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

Route::get('/contas_pagar', 'Contas_pagarController@index');
Route::get('/contas_pagar/{contas_pagar}', 'Contas_pagarController@show');
Route::post('/contas_pagar', 'Contas_pagarController@store');
Route::patch('/contas_pagar/{contas_pagar}', 'Contas_pagarController@update');
Route::delete('/contas_pagar/{contas_pagar}', 'Contas_pagarController@delete');


Route::get('/contas_receber', 'Contas_receberController@index');
Route::get('/contas_receber/{contas_receber}', 'Contas_receberController@show');
Route::post('/contas_receber', 'Contas_receberController@store');
Route::patch('/contas_receber/{contas_receber}', 'Contas_receberController@update');
Route::delete('/contas_receber/{contas_receber}', 'Contas_receberController@delete');
