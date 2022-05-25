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

Route::post('posts', 'BlogController@create');
Route::get('posts', 'BlogController@index');
Route::get('posts/{id}', 'BlogController@show');
Route::post('posts/{id}', 'BlogController@edit');
Route::delete('posts/{id}', 'BlogController@destroy');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
