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

// Route with view
Route::get('/', function () {
    return view('welcome');
});
//route with view and params
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Route with controller
Route::get('/user', 'UserController@index');

// route with ID
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

// Route with return
Route::get('foo', function () {
    return 'Hello World';
});

// resource controller
Route::resource('photos', 'PhotoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
