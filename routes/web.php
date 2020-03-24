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
Route::get('/download/{image}', ['as' => 'image.download', 'uses' => 'BlogController@image_download']);
Route::get('/programming/{article}', ['as' => 'programming.show', 'uses' => 'BlogController@show']);

Route::get('/register', 'AuthenticationController@returnViewRegistration');
Route::post('/register', 'AuthenticationController@storeAccount');

Route::get('/login', [ 'as' => 'login', 'uses' => 'AuthenticationController@returnViewLogin']);
Route::post('/login', [ 'as' => 'login', 'uses' =>'AuthenticationController@logIn']);
Route::get('/logout', 'AuthenticationController@logOut');

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'admin'], function(){
        Route::get('/admin/dashboard', 'AdminController@dashboard');
        Route::resource('/admin/images', 'ImagesController');
        Route::resource('/admin/articles', 'ArticlesController');
        Route::get('/admin/music', 'MusicController@index');
        Route::delete('/admin/music/{music}', ['as' => 'music.destroy', 'uses' => 'MusicController@destroy']);
        Route::get('/admin/music/create', ['as' => 'music.store', 'uses' => 'MusicController@create']);
        Route::post('/admin/music/create', 'MusicController@store');
        Route::get('/admin/users/', 'UsersController@index');
        Route::delete('/admin/users/{user}', ['as' => 'user.destroy', 'uses' => 'UsersController@destroy']);
    });
});
