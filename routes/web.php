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
Route::get('/term-signin', function () {
    return view('term_signin');
});
Route::get('/term-signup', 'HomeController@init_signup');
Route::get('/about', function () {
    return view('about');
});
Route::get('/about/team', function () {
    return view('team');
});
Route::get('/game', function () {
    return view('game');
});
Route::get('/game/profile', function () {
    return view('term_profile');
});
Route::group(['prefix' => 'user'], function () {
    Route::get('profile', 'UserController@initPage');
    Route::post('updateInfo', 'UserController@updateInfo');
});

Route::get('/signout', 'HomeController@signout');
Route::post('/signin', 'HomeController@signin');
Route::post('/signup', 'HomeController@signup');
Route::get('/signout', 'HomeController@signout');