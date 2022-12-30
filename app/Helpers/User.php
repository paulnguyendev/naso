<?php
namespace App\Helpers;
use App\Models\UserModel;
use Illuminate\Support\Facades\Cookie;
class User
{
    public static function getInfo($user_id = "", $key = "")
    {
        $prefix =  request()->route()->getPrefix();
        $prefix = explode("/", $prefix);
        $prefixType = array_shift($prefix);
        if (empty($user_id)) {
            if ($prefixType == 'admin') {
                $userInfo = session()->get('adminInfo');
            } else {
                $userInfo = session()->get('userInfo');
            }
            $userInfo = array_shift($userInfo);
            $user_id = $userInfo['id'];
        }
        $user = UserModel::find($user_id);
        if ($user) {
            if ($key) {
                $result = (isset($user[$key])) ? $user[$key] : "";
            } else {
                $result = $user;
            }
        }
        return $result;
    }
    public static function getAffInfo($key = "aff_user_id") {
        $result = null;
        if($key == 'aff_user_id' && Cookie::has('aff_user_id')) {
            $result = Cookie::get('aff_user_id');
        }
        return $result;
    }
}
