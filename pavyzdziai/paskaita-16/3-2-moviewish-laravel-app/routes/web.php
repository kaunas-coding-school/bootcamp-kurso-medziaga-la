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


// Homepage for visitors
Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@feedback')->name('home');

// Authentication routes
Auth::routes();

// Wishlist homepage for loggged in users
Route::get('/wishlist', 'WishlistController@index')->name('wishlist');

// Search movies routes
Route::get('/search', 'SearchMoviesController@index')->name('search');
Route::post('/search', 'SearchMoviesController@send')->name('search');

// Movie results route
Route::get('/search/results', 'SearchMoviesController@results')->name('search-results');

// Movies
Route::resource('movies', 'MovieController');

// Returns views without Controller
Route::get('/cinemas', function () {
    return view('cinemas');
});
Route::get('/settings', function () {
    return view('settings');
});
