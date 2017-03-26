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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::group(['prefix' => 'user'], function () {
    Route::get('profile', 'UserController@initPage');
    Route::post('updateInfo', 'UserController@updateInfo');
});

Route::get('/signout', 'HomeController@signout');
Route::post('/signin', 'HomeController@signin');
Route::post('/signup', 'HomeController@signup');
Route::get('/signout', 'HomeController@signout');