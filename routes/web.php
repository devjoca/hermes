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

Route::get('/', 'HomeController')->middleware('guest');

Route:: middleware('auth')->group(function() {
    Route::get('/apps', 'AppsController@index');
    Route::get('/apps/create', 'AppsController@create');
    Route::post('/apps', 'AppsController@store');
    Route::delete('/apps/{id}', 'AppsController@delete');
});

Auth::routes();
Route::delete('/logout', 'LoginController@logout');
