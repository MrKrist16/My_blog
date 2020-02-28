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

Route::get('/', ['as' => 'main', 'uses' => 'BlogController@mainpage']);
Route::get('/about_me', 'BlogController@about_me');
Route::get('/programming', 'BlogController@programming');
Route::get('/self_development', 'BlogController@self_development');

Route::get('/register', 'AuthenticationController@returnViewRegistration');
Route::post('/register', 'AuthenticationController@storeAccount');

Route::get('/login', [ 'as' => 'login', 'uses' => 'AuthenticationController@returnViewLogin']);
Route::post('/login', [ 'as' => 'login', 'uses' =>'AuthenticationController@logIn']);
Route::get('/logout', 'AuthenticationController@logOut');

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'admin'], function(){
        Route::get('/admin/dashboard', 'AdminController@dashboard');
    });
});
