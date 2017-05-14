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

Route::get('/', 'HomeController@index');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/signin', function () {
    return view('term_signin');
});
Route::get('/signup', 'HomeController@init_signup');
Route::get('/about', function () {
    return view('about');
});
Route::get('/about/team', function () {
    return view('team');
});
Route::get('/intro', function () {
    return view('intro');
});
Route::get('/chat', function () {
    return view('chat');
});

Route::get('/confession', function () {
    return view('confession');
});

Route::group(['prefix' => 'confession'], function () {
    Route::get('/', function () {
        return view('confession');
    });
    Route::get('/{postid}', 'ConfessController@initPage')->where(['postid' => '[0-9]+']);
    Route::get('/write', function () {
        return view('write_confess');
    });
    Route::post('/submit', 'ConfessController@submitPost');
    Route::post('/addComment', 'ConfessController@addComment');
});


Route::get('/game', function () {
    return view('index');
});
Route::get('/game/profile', function () {
    return view('term_profile');
});

Route::get('/chat', 'ChatController@initChat');
Route::get('/whoiknow','FriendController@whoIKnow' );


Route::group(['prefix' => 'user'], function () {
    Route::get('profile', 'UserController@initPage');
    Route::post('updateInfo', 'UserController@updateInfo');
    Route::get('profile/{id}', ['as' => 'user.id', 'uses' => 'SearchController@initPage']);
});

Route::group(['prefix' => 'friend'], function () {
    Route::get('{request}/{userId}', 'FriendController@RequestFriend');
});

Route::get('/signout', 'HomeController@signout');
Route::post('/signin', 'HomeController@signin');
Route::post('/signup', 'HomeController@signup');
Route::get('/test', 'HomeController@initHome');

Route::get('/change-password', 'HomeController@changePassword');
Route::post('/change-password', 'HomeController@changePasswordPost');

Route::get('/search', 'SearchController@getSearch');


Route::get('image-upload','ImageController@imageUpload');
Route::post('image-upload','ImageController@imageUploadPost');

Route::post('sendMessage', array('uses' => 'ChatController@sendMessage'));
Route::post('isTyping', array('uses' => 'ChatController@isTyping'));
Route::post('notTyping', array('uses' => 'ChatController@notTyping'));
Route::post('retrieveChatMessages', array('uses' => 'ChatController@retrieveChatMessages'));
Route::post('retrieveTypingStatus', array('uses' => 'ChatController@retrieveTypingStatus'));


Auth::routes();

Route::get('/home', 'HomeController@index');

