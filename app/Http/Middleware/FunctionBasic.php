<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 4/23/2017
 * Time: 4:04 PM
 */

namespace App\Http\Middleware;
use DB;

class FunctionBasic
{
    public static function getAge($birthdate = '0000-00-00') {
        if ($birthdate == '0000-00-00') return 'Unknown';

        $bits = explode('-', $birthdate);
        $age = date('Y') - $bits[0] - 1;

        if(isset($arr[1])){
            $arr[1] = 'm';
        }else
            $arr[1] = null;

        if(isset($arr[2])){
            $arr[2] = 'd';
        }else
            $arr[2] = null;

        for ($i = 1; $arr[$i]; $i++) {
            $n = date($arr[$i]);
            if ($n < $bits[$i])
                break;
            if ($n > $bits[$i]) {
                ++$age;
                break;
            }
        }
        if($age < '0'){
            $age = '0';
        }
        return $age;
    }
}