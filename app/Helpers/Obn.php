<?php
namespace App\Helpers;

use App\Models\UserModel;

class Obn {
    public static function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (UserModel::where("code", "=", $code)->first());
        return $code;
    }
    public static function get_logo() {
        return asset('obn-dashboard/img/logo.png');
    }
}