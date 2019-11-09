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

use App\Http\Controllers\FollowsController;



Auth::routes();

Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create')->name('p.create');
Route::post('/p', 'PostsController@store')->name('p.store');
Route::get('/p/{post}', 'PostsController@show')->name('p.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
