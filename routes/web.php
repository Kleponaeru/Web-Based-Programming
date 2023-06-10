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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index', function () {
    return view('index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'PageController@home');
    Route::get('/profile', 'PageController@profile');
    Route::get('/students', 'PageController@students');
    Route::get('/contact', 'PageController@contact');

    Route::get('/students/search', 'PageController@search');
    Route::get('/students/formadd', 'PageController@formadd');
    Route::get('/students/formedit/{id}', 'PageController@formedit');
    Route::put('/students/update/{id}', 'PageController@update');
    Route::get('/students/delete/{id}', 'PageController@delete');
    Route::post('/students/save', 'PageController@save');
    
    Route::get('/logout', 'AuthController@logout');
});
Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', 'AuthController@register');
    Route::post('/simpan', 'AuthController@simpan');
    Route::get('/', 'AuthController@login')->name('login');
    Route::post('/ceklogin', 'AuthController@ceklogin');
});