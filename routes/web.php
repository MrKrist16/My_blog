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

Route::get('/', 'BlogController@mainpage');
Route::get('/about_me', 'BlogController@about_me');
Route::get('/programming', 'BlogController@programming');
Route::get('/self_development', 'BlogController@self_development');

Auth::routes();

Route::get('dashboard', 'Admin\AdminController@get_dashboard');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
