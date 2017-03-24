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
Route::get('/edit-profile', function () {
    return view('edit_profile');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user-profile', function () {
    return view('user_profile');
});

Route::post('/signin', 'HomeController@signin');