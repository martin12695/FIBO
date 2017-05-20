<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DateTime;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Input;
use App\Http\Middleware\FunctionBasic;
use Carbon\Carbon;

class SearchController
{
    public function getSearch()
    {
        if (Auth::check()) {

            $getSex = DB::table('option_sex')->get();
            $getUser = DB::table('users')->where('id', Auth::id())->first();
            $getSearch = DB::table('users')
                ->where('id', '!=', session('userId'))
                ->whereNotIn('id', function($q){
                    $q->select('user_one')
                        ->from('relationship')
                        ->where('user_two','=',Auth::id());
                })
                ->whereNotIn('id', function($q){
                    $q->select('user_two')
                        ->from('relationship')
                        ->where('user_one','=',Auth::id());
                })
                ->orderBy('created', 'desc')
                ->paginate(8);
            $getAge = DB::table('option_subject_eag')->get();
            $getCity = DB::table('province')->get();
            $cities = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->select('*')
                ->get();

            return view('search', array(
                'listPeople' => $getSearch,
                'listUser' => $cities,
                'getUser' => $getUser,
                'getSex'       => $getSex,
                'getAge'    => $getAge,
                'getCity'   => $getCity
            ))->render();

        } else {
            return view('error.404');
        }
    }

    public function postSearch(){

        $postSearch = '';
        $postAge = '';
        $postUser = '';
        $postCity = '';
        $postSex = '';
        $postCities = '';
        $userTemp = '';
        $postAgeTerm = '';

        /*--DIEU KIEN LOC THEO DO TUOI --*/
        $checkOption = Input::get('age');
        if( $checkOption ){
            $postSex = DB::table('option_sex')->get();
            $postList = DB::table('users')->where('id', '!=', Auth::id())->get();
            $postUser = DB::table('users')->where('id', Auth::id())->first();
            $postAge = DB::table('option_subject_eag')->get();
            $postCity = DB::table('province')->get();
            $postCities = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->select('*')
                ->get();
            foreach ($postList as $item => $value) {
                if ($value->id != session('userId')) {
                    $userTemp = $value->id;
                }
                $from = new DateTime($value->birthday);
                $to = new DateTime('today');

                DB::table('users')->where('id', $userTemp)->update(['age' => $from->diff($to)->y]);

                if( $checkOption == '1' ){
                    $postSearch = DB::table('users')
                        ->where([['id','!=', Auth::id()],['age','>=','18'],['age','<=','20']])
                        ->whereNotIn('id', function($q){
                            $q->select('user_one')
                                ->from('relationship')
                                ->where('user_two','=',Auth::id());
                        })
                        ->whereNotIn('id', function($q){
                            $q->select('user_two')
                                ->from('relationship')
                                ->where('user_one','=',Auth::id());
                        })
                        ->orderBy('created', 'desc')
                        ->paginate(8);
                }
                elseif( $checkOption == '2' ){
                    $postSearch = DB::table('users')
                        ->where([['id','!=', Auth::id()],['age','>=','21'],['age','<=','25']])
                        ->whereNotIn('id', function($q){
                            $q->select('user_one')
                                ->from('relationship')
                                ->where('user_two','=',Auth::id());
                        })
                        ->whereNotIn('id', function($q){
                            $q->select('user_two')
                                ->from('relationship')
                                ->where('user_one','=',Auth::id());
                        })
                        ->orderBy('created', 'desc')
                        ->paginate(8);
                }
                elseif( $checkOption == '3' ){
                    $postSearch = DB::table('users')
                        ->where([['id','!=', Auth::id()],['age','>=','26'],['age','<=','30']])
                        ->whereNotIn('id', function($q){
                            $q->select('user_one')
                                ->from('relationship')
                                ->where('user_two','=',Auth::id());
                        })
                        ->whereNotIn('id', function($q){
                            $q->select('user_two')
                                ->from('relationship')
                                ->where('user_one','=',Auth::id());
                        })
                        ->orderBy('created', 'desc')
                        ->paginate(8);
                }
                elseif( $checkOption == '4' ){
                    $postSearch = DB::table('users')
                        ->where([['id','!=', Auth::id()],['age','>=','31'],['age','<=','35']])
                        ->whereNotIn('id', function($q){
                            $q->select('user_one')
                                ->from('relationship')
                                ->where('user_two','=',Auth::id());
                        })
                        ->whereNotIn('id', function($q){
                            $q->select('user_two')
                                ->from('relationship')
                                ->where('user_one','=',Auth::id());
                        })
                        ->orderBy('created', 'desc')
                        ->paginate(8);
                }
                elseif( $checkOption == '5' ){
                    $postSearch = DB::table('users')
                        ->where([['id','!=', Auth::id()],['age','>=','36'],['age','<=','40']])
                        ->whereNotIn('id', function($q){
                            $q->select('user_one')
                                ->from('relationship')
                                ->where('user_two','=',Auth::id());
                        })
                        ->whereNotIn('id', function($q){
                            $q->select('user_two')
                                ->from('relationship')
                                ->where('user_one','=',Auth::id());
                        })
                        ->orderBy('created', 'desc')
                        ->paginate(8);
                }
                elseif( $checkOption == '6' ){
                    $postSearch = DB::table('users')
                        ->where([['id','!=', Auth::id()],['age','>=','41'],['age','<=','50']])
                        ->whereNotIn('id', function($q){
                            $q->select('user_one')
                                ->from('relationship')
                                ->where('user_two','=',Auth::id());
                        })
                        ->whereNotIn('id', function($q){
                            $q->select('user_two')
                                ->from('relationship')
                                ->where('user_one','=',Auth::id());
                        })
                        ->orderBy('created', 'desc')
                        ->paginate(8);
                }
                elseif( $checkOption == '7' ){
                    $postSearch = DB::table('users')
                        ->where([['id','!=', Auth::id()],['age','>=','51'],['age','<=','60']])
                        ->whereNotIn('id', function($q){
                            $q->select('user_one')
                                ->from('relationship')
                                ->where('user_two','=',Auth::id());
                        })
                        ->whereNotIn('id', function($q){
                            $q->select('user_two')
                                ->from('relationship')
                                ->where('user_one','=',Auth::id());
                        })
                        ->orderBy('created', 'desc')
                        ->paginate(8);
                }
            }
        }else{
            return Redirect::to('/search');
        }

        /*--DIEU KIEN LOC THEO GIOI TINH --*/
        /*--
        $checkAge = Input::get('gender');
        if ( $checkAge ){
            $postSex = DB::table('option_sex')->get();
            $postUser = DB::table('users')->where('id', Auth::id())->first();
            $postAge = DB::table('option_subject_eag')->get();
            $postCity = DB::table('province')->get();
            $postCities = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->select('*')
                ->get();

            if( $checkAge == '1' ){
                $postSearch = DB::table('users')->where('sex', $checkAge)->where('id', '!=' , Auth::id())->orderBy('created', 'desc')->paginate(4);
            }
            elseif( $checkAge == '2' ){
                $postSearch = DB::table('users')->where('sex', $checkAge)->where('id', '!=' , Auth::id())->orderBy('created', 'desc')->paginate(4);
            }
            elseif( $checkAge == '0' ){
                $postSearch = DB::table('users')->where('id', '!=', Auth::id())->orderBy('created', 'desc')->paginate(8);
            }
        }--*/

        /*--DIEU KIEN LOC THEO THANH PHO --*/
        /*--
        $checkCity = Input::get('city');
        if ( $checkCity ){
            $postSex = DB::table('option_sex')->get();
            $postList = DB::table('users')->where('id', '!=', Auth::id())->get();
            $postUser = DB::table('users')->where('id', Auth::id())->first();
            $postAge = DB::table('option_subject_eag')->get();
            $postCity = DB::table('province')->get();
            $postCities = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->select('*')
                ->get();

            foreach ($postList as $postCity => $value) {
                if( $checkCity == $value->come_from){
                    $postSearch = DB::table('users')
                        ->join('province', 'come_from', '=', 'province.id_province')
                        ->where('users.come_from', $checkCity)
                        ->where('users.id','!=', Auth::id())
                        ->select('*')
                        ->orderBy('created', 'desc')
                        ->paginate(4);
                }elseif($checkCity == '0'){
                    $postSearch = DB::table('users')->where('id', '!=', Auth::id())->orderBy('created', 'desc')->paginate(8);
                }
            }
        }--*/

        /*--VIEW KET QUA --*/
        return view('search', array(
            'listPeople' => $postSearch,
            'listUser' => $postCities,
            'getUser' => $postUser,
            'getSex'       => $postSex,
            'getAge'    => $postAge,
            'getCity'   => $postCity
        ))->render();
    }

    public function initPage($id) {
        if(!$id){
            return redirect('/');
        }else {

            $info = DB::table('users')->where('id', $id)->first();
            $sex = DB::table('users')
                ->join('option_sex', 'sex', '=', 'option_sex.id')
                ->where('users.id', $id)
                ->select('users.id', 'option_sex.id','option_sex.value')
                ->first();

            $option_sex = DB::table('option_sex')->get();

            $bodies = DB::table('user_description')
                ->join('option_body', 'body', '=', 'option_body.id')
                ->where('user_description.user_id', $id)
                ->select('user_description.id', 'option_body.id','option_body.value')
                ->first();

            $finances = DB::table('user_description')
                ->join('option_finace', 'finance', '=', 'option_finace.id')
                ->where('user_description.user_id', $id)
                ->select('user_description.id', 'option_finace.id','option_finace.value')
                ->first();

            $findSubs = DB::table('user_description')
                ->join('option_subject_find', 'subject_find', '=', 'option_subject_find.id')
                ->where('user_description.user_id', $id)
                ->select('user_description.id', 'option_subject_find.id','option_subject_find.value')
                ->first();

            $findAges = DB::table('user_description')
                ->join('option_subject_eag', 'subject_eag', '=', 'option_subject_eag.id')
                ->where('user_description.user_id', $id)
                ->select('user_description.id', 'option_subject_eag.id','option_subject_eag.value')
                ->first();

            $cities = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->where('users.id', $id)
                ->select('users.id', 'province.id_province','province.value')
                ->first();

            $schools = DB::table('users')
                ->join('option_school', 'school', '=', 'option_school.id')
                ->where('users.id', $id)
                ->select('users.id', 'option_school.id','option_school.value')
                ->first();

            $findAge = DB::table('option_subject_eag')->get();
            $findSub = DB::table('option_subject_find')->get();
            $finance = DB::table('option_finace')->get();
            $province =  DB::table('province')->get();
            $school = DB::table('option_school')->get();
            $body = DB::table('option_body')->get();
            $infoDes =  DB::table('user_description')->where('user_id', $id)->first();
            if (empty($infoDes)) {
                $infoDes = new \stdClass();
                $infoDes->height = '';
                $infoDes->weight = '';
                $infoDes->body = 1;
                $infoDes->finance = 1;
                $infoDes->hair = '';
                $infoDes->priority_in_life = '';
                $infoDes->subject_find = 1;
                $infoDes->subject_eag = 1;
            }
            $infoHobby =  DB::table('user_hobby')->where('user_id', $id)->first();
            if (empty($infoHobby)) {
                $infoHobby = new \stdClass();
                $infoHobby->music = '';
                $infoHobby->movie = '';
                $infoHobby->sport = '';
                $infoHobby->hobby = '';
            }
            $date = new DateTime($info->birthday);
            $info->birthday = $date->format('d/m/Y');
            return view('user_profile',[
                'info_basic' => $info,
                'sex'        => $sex,
                'bodies'      => $bodies,
                'finances'   => $finances,
                'findSubs'   => $findSubs,
                'findAges'   => $findAges,
                'cities'     => $cities,
                'schools'    => $schools,
                'option_sex' => $option_sex,
                'infoDes'    => $infoDes,
                'infoHobby'  => $infoHobby,
                'findAge'    => $findAge,
                'findSub'    => $findSub,
                'finance'    => $finance,
                'body'       => $body,
                'province'   => $province,
                'school'     => $school
            ]);
        }
    }
}
