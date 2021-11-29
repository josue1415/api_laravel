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
Route::get('usuarios', 'App\Http\Controllers\UsuariosController@index');
Route::get('usuarios/{usuarios}', 'App\Http\Controllers\UsuariosController@show');
Route::post('usuarios', 'UsuariosController@store');
Route::put('usuarios/{usuarios}', 'UsuariosController@update');
Route::delete('usuarios/{usuarios}', 'UsuariosController@delete');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
