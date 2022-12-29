<?php

namespace App\Helpers;

use App\Models\UserModel;

class Obn
{
    public static function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (UserModel::where("code", "=", $code)->first());
        return $code;
    }
    public static function get_logo()
    {
        return asset('obn-dashboard/img/logo.png');
    }
    public static function showStatus($status)
    {
        $xhtml_status = null;
        $status = $status ? $status : 'default';
        $tpl_status = config('obn.status.template');
        $current_status = isset($tpl_status[$status]) ? $tpl_status[$status] : $tpl_status['default'];
        $xhtml_status = sprintf('<span class = "badge %s">%s</span>', $current_status['class'], $current_status['name']);
        return $xhtml_status;
    }
}
