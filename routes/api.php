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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//route for read
Route::get('/mahasiswa/read', 'MhsApiController@read');
Route::post('/mahasiswa/create', 'MhsApiController@create');
Route::post('/mahasiswa/update', 'MhsApiController@update');
Route::post('/mahasiswa/update/{id}', 'MhsApiController@update');
Route::delete('/mahasiswa/delete/{id}', 'MhsApiController@delete');
