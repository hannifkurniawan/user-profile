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

// Route::get('/', 'Web\PageController@index');

// Route::get('/register', 'Web\PageController@register');

// Route::get('/dashboard', 'Web\UserController@index');

// Route::get('/user/{id}/edit-profile', 'Web\UserController@editProfile');

// Route::get('/user/{id}/edit-password', 'Web\UserController@editPassword');

Route::get('/{any}', function () {
    return view('user-profile');
  })->where('any', '.*');