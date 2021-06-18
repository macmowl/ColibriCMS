<?php

use Illuminate\Support\Facades\Route;

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



Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function() {
    Route::get('/logout', 'App\Http\Controllers\AccountController@logout');
});



Route::get('/', 'App\Http\Controllers\PostController@all');
Route::get('/posts/{post}', 'App\Http\Controllers\PostController@single');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('admin/{any}', 'App\Http\Controllers\AdminController@index')->where('any', '.*');

Route::get('/login', 'App\Http\Controllers\LoginController@form');
Route::post('/login', 'App\Http\Controllers\LoginController@connect');


