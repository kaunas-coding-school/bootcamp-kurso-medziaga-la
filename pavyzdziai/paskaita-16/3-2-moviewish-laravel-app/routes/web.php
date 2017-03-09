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

Route::get('/', 'WishlistController@index')->name('home');

Route::post('/', 'WishlistController@feedback')->name('home');


Route::get('/cinemas', function () {
    return view('cinemas');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/movie', function () {
    return view('movie');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/settings', function () {
    return view('settings');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
