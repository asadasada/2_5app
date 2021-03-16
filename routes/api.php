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
//can't resolve 401 of sanctum so that 17 line was comented out
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
Route::get('/user', function (Request $request) {
    return $request->user();
}
);
Route::get('/edit','EditController@index');
Route::post('/register','RegisterController@register');
Route::post('/login','LoginController@login');
Route::post('/logout','LoginController@logout');
Route::post('/edit','EditController@edit');
