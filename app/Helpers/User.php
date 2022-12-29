<?php

namespace App\Helpers;

use App\Models\UserModel;

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
}
