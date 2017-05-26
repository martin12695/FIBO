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
    $count = DB::table('users')->count();
    return view('term_signin', compact('count', $count));
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
    Route::get('/','ConfessController@initPageOver');
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
    Route::post('updatePosition', 'UserController@updatePosition');
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
Route::post('/search', 'SearchController@postSearch');


Route::get('image-upload','ImageController@imageUpload');
Route::post('image-upload','ImageController@imageUploadPost');
Route::post('/deleteImage/{id}','ImageController@deleteImage')->where(['id' => '[0-9]+']);
Route::post('uploadPhoto','ImageController@uploadPhoto');
Route::post('uploadstudentId','ImageController@uploadstudentId');


Route::post('sendMessage', array('uses' => 'ChatController@sendMessage'));
Route::post('isTyping', array('uses' => 'ChatController@isTyping'));
Route::post('notTyping', array('uses' => 'ChatController@notTyping'));
Route::post('retrieveChatMessages', array('uses' => 'ChatController@retrieveChatMessages'));
Route::post('retrieveTypingStatus', array('uses' => 'ChatController@retrieveTypingStatus'));


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
    Route::get('/login','AdminController@getLogin');
    Route::post('/login','AdminController@postLogin');
    Route::get('/logout','AdminController@logout');
    Route::get('/index','AdminController@index');
    Route::get('/member', 'UserManagerController@getUser');
    Route::get('/add-member', function (){
        if (Auth::check()){
            $province =  DB::table('province')->get();
            return view('admin.addMember',compact('province', $province));
        }else
            return view('admin.login');

    });
    Route::post('/add-member', 'UserManagerController@addUser');
    Route::get('/edit-member/{id}', ['as' => 'getEdit.id', 'uses' => 'UserManagerController@getEdit']);
    Route::post('/edit-member/{id}', ['as' => 'postEdit.id', 'uses' => 'UserManagerController@postEdit']);
    Route::get('/del-member/{id}', ['as' => 'getDel.id', 'uses' => 'UserManagerController@getDel']);
    Route::get('/staff', 'AdminManagerController@getAdmin');
    Route::get('/edit-staff/{id}', ['as' => 'getEditStaff.id', 'uses' => 'AdminManagerController@getEdit']);
    Route::post('/edit-staff/{id}', ['as' => 'postEditStaff.id', 'uses' => 'AdminManagerController@postEdit']);
    Route::get('/add-staff', function (\Illuminate\Http\Request $request){
        if (Auth::check()){
            $province =  DB::table('province')->get();
            $html = '';
            $user = DB::table('users')
                ->where([['id', '!=', Auth::id()], ['level','!=', 'Admin']])
                ->orderBy('created', 'desc')
                ->paginate(6);
            $sex = DB::table('option_sex')
                ->join('users', 'option_sex.id', '=', 'sex')
                ->where([['users.id', '!=', Auth::id()], ['users.level','!=', 'Admin']])
                ->select('*')
                ->get();
            $come_form = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->where([['users.id', '!=', Auth::id()], ['users.level','!=', 'Admin']])
                ->select('users.id', 'province.id_province','province.value')
                ->get();
            foreach($user as $row){
                foreach($sex as $item)
                {
                    foreach($come_form as $key){
                        if( $item->id == $row->id && $key->id == $item->id && $key->id == $row->id){
                            $html .= '<tr id="myTableRow">
                                      <td>'.$row->id.'</td>
                                      <td>'.$row->name.'</td>
                                      <td>'.$row->age.'</td>
                                      <td>'.$row->email.'</td>
                                      <td>'.$item->value.'</td>
                                      <td>'.$row->phone.'</td>
                                      <td>'.$key->value.'</td>
                                      <td>'.$row->birthday.'</td>
                                      <td>'.$row->level.'</td>
                                      <td><a href="'.route('addStaff.id', $row->id).'" class="ThemDuLieu btn btn-info">Thêm</a></td>
                                   </tr>';
                        }
                    }
                }
            }
            if ($request->ajax()) {
                return $html;
            }
            return view('admin.addStaff',[
                'province' => $province,
                'user' => $user,
                'sex' => $sex,
                'come_from' => $come_form
            ]);
        }else
            return view('admin.login');

    });
    Route::post('/add-staff', 'AdminManagerController@addUser');
    Route::get('/add-staff/{id}', ['as' => 'addStaff.id', 'uses' => 'AdminManagerController@addUserOther']);

    Route::get('/term-member', 'UserManagerController@getTermMember');
    Route::get('/term-member/del/{id}', ['as' => 'delTermMember.id', 'uses' => 'UserManagerController@delTermMember']);
    Route::get('/term-member/edit/{id}', ['as' => 'getEditTermMember.id', 'uses' => 'UserManagerController@getEditTermMember']);
    Route::post('/term-member/edit/{id}', ['as' => 'postEditTermMember.id', 'uses' => 'UserManagerController@postEditTermMember']);

    Route::get('/term-member/check/{id}', ['as' => 'getCheckTermMember.id', 'uses' => 'UserManagerController@getCheckTermMember']);
    Route::get('/term-member/checked/{id}', ['as' => 'getCheckedTermMember.id', 'uses' => 'UserManagerController@getCheckedTermMember']);
    Route::get('/term-member/send-mail/{id}', ['as' => 'sendMail.id', 'uses' => 'UserManagerController@sendMail']);
});

