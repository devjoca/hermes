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

Route::get('/', 'HomeController');

Route:: middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController');
    Route::delete('/apps/{id}', 'AppsController@delete');
    Route::get('/apps/create', 'AppsController@create');
});

Auth::routes();
Route::delete('/logout', 'LoginController@logout');
