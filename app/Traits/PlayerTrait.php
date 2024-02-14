<?php
namespace App\Traits;

use App\Models\hardware;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use DateTime;
use Illuminate\Http\Request;

trait PlayerTrait
{

    public function pwd_studyPrice($pwdResets, $lastReset){

        $return = Array();

        if($pwdResets == 0){
            return 0;
        }

        switch($pwdResets){

            case 1:
                $time = 3*3600; //3 hours
                break;
            case 2:
                $time = 6*3600; //6 hours
                break;
            case 3:
                $time = 12*3600; //12 hours
                break;
            case 4:
                $time = 24*3600; //24 hours
                break;
            case 5:
                $time = 48*3600; //48 hours
                break;
            case 6:
                $time = 96*3600; //96 hours
                break;
            default:
                $time = 168*3600; //168 hours (1 semana)
                break;

        }

        $price = 50 + 10*$pwdResets + (pow($pwdResets, 3.2))/10;

        if($time <= $lastReset){
            return 0;
        }

        $return['PRICE'] = (int)$price;
        $return['WAIT_TIME'] = $time;

        return $return;

    }
public function pwd_info()
{
    $return = [];

    $id = auth()->id(); // Get the authenticated user's ID

    // Get the user's pwdResets and lastPwdReset
    $data = DB::table('users_stats')
        ->select('pwdResets', DB::raw('TIMESTAMPDIFF(SECOND, lastPwdReset, NOW()) AS lastReset'))
        ->where('uid', $id)
        ->get()
        ->map(function ($item) {
            return (array) $item;
        })
        ->all();

    if (isset($data[0]['pwdresets']) && isset($data[0]['lastreset'])) {
        $pwdInfo = $this->pwd_studyPrice($data[0]['pwdresets'], $data[0]['lastreset']);
        if($pwdInfo['PRICE'] > 0){

        $now = new DateTime('now');

        $reset = new DateTime('now');
        $reset->modify('-' . $data[0]["lastreset"] . ' seconds');

        $diff = $now->diff($reset);

        if($diff->h > 0){

            $waitTime = $diff->h;

            if($diff->d > 0){
                $waitTime += $diff->d * 24;
            }

            $str = sprintf(ngettext("%d hour", "%d hours", $waitTime), $waitTime);

        } else {

            $waitTime = $diff->i;

            $str = sprintf(ngettext("%d minute", "%d minutes", $waitTime), $waitTime);

        }

    } else {
        $waitTime = 0;
        $str = 0;
    }
    } else {
        $pwdInfo = $this->pwd_studyPrice(1, 2);
        if($pwdInfo['PRICE'] > 0){

        $now = new DateTime('now');

        $reset = new DateTime('now');
        $reset->modify('-0 seconds');

        $diff = $now->diff($reset);

        if($diff->h > 0){

            $waitTime = $diff->h;

            if($diff->d > 0){
                $waitTime += $diff->d * 24;
            }

            $str = sprintf(ngettext("%d hour", "%d hours", $waitTime), $waitTime);

        } else {

            $waitTime = $diff->i;

            $str = sprintf(ngettext("%d minute", "%d minutes", $waitTime), $waitTime);

        }

    } else {
        $waitTime = 0;
        $str = 0;
    }
        // Handle the case when the keys are not set
    }




    $return['PRICE'] = $pwdInfo['PRICE'];
    $return['NEXT_RESET'] = $str;

    return $return;
}


    public function verifyID($uid)
{
    if(is_int($uid) || ctype_digit($uid)){

        if(auth()->check()){
            if($uid == auth()->id()) return true;
        }

        $total = DB::table('users')
            ->where('id', $uid)
            ->count();

        return $total == 1;
    }

    return false;
}
}
