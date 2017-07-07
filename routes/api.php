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
Route::group(['prefix' => 'posts'], function(){
   Route::get('/', 'PostController@index');
   Route::get('/{post}', 'PostController@show');
   Route::post('/', 'PostController@store');
   Route::get('/{post}/edit', 'PostController@edit');
   Route::put('/{post}', 'PostController@update');
   Route::delete('/{post}', 'PostController@destroy');
});
