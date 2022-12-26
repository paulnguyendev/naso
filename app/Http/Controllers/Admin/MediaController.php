<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
#Request
#Model
use App\Models\UserModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
#Mail
use Illuminate\Support\Facades\Mail;
// use App\Mail\NewUserMail;
#Helper
class MediaController extends Controller
{
    private $pathViewController     = "admin.pages.media.";
    private $controllerName         = "media";
    private $model;
    private $params                 = [];
    function __construct()
    {
        $this->model = new UserModel();
        View::share('controllerName', $this->controllerName);
    }
    public function folders(Request $request)
    {
        $result = [
            [
                'id' => 1,
                'name' => 'paul',
                'note' => '',
            ],
            [
                'id' => 1,
                'name' => 'giang ga',
                'note' => '',
            ],
        ];
        return response()->json($result);
    }
    public function action(Request $request)
    {
        $result = [];
        $func = $request->func;
        if ($func == 'load_thumbs') {
            $result = [
                [
                    "id" => 281,
                    "type" => "png",
                    "title" => "mr jimmy 01 1",
                    "caption" => "mr jimmy 01 1",
                    "url" => "/mr-jimmy-01-1.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/mr-jimmy-01-1.png?zc=1",
                    "time" => 1672040292,
                    "size" => 71413,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Monday, 26th Dec 2022, 02:38:12 pm"
                ],
                [
                    "id" => 280,
                    "type" => "png",
                    "title" => "token demain 3 1",
                    "caption" => "token demain 3 1",
                    "url" => "/token-demain-3-1.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/token-demain-3-1.png?zc=1",
                    "time" => 1671703143,
                    "size" => 22736,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Thursday, 22nd Dec 2022, 04:59:03 pm"
                ],
                [
                    "id" => 279,
                    "type" => "png",
                    "title" => "token demain 4",
                    "caption" => "token demain 4",
                    "url" => "/token-demain-4.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/token-demain-4.png?zc=1",
                    "time" => 1671703126,
                    "size" => 24047,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Thursday, 22nd Dec 2022, 04:58:46 pm"
                ],
                [
                    "id" => 278,
                    "type" => "png",
                    "title" => "logo",
                    "caption" => "logo",
                    "url" => "/165246-logo.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/165246-logo.png?zc=1",
                    "time" => 1671702766,
                    "size" => 0,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Thursday, 22nd Dec 2022, 04:52:46 pm"
                ],
                [
                    "id" => 277,
                    "type" => "jpg",
                    "title" => "302701193 113169774855604 8260449722808231292 n",
                    "caption" => "302701193 113169774855604 8260449722808231292 n",
                    "url" => "/223522-302701193-113169774855604-8260449722808231292-n.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/223522-302701193-113169774855604-8260449722808231292-n.jpg?zc=1",
                    "time" => 1663947322,
                    "size" => 116241,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 10:35:22 pm"
                ],
                [
                    "id" => 276,
                    "type" => "gif",
                    "title" => "gggg",
                    "caption" => "gggg",
                    "url" => "/gggg.gif",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/gggg.gif?zc=1",
                    "time" => 1663947191,
                    "size" => 630250,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 10:33:11 pm"
                ],
                [
                    "id" => 275,
                    "type" => "gif",
                    "title" => "hujhh",
                    "caption" => "hujhh",
                    "url" => "/hujhh.gif",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/hujhh.gif?zc=1",
                    "time" => 1663947179,
                    "size" => 117284,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 10:32:59 pm"
                ],
                [
                    "id" => 274,
                    "type" => "gif",
                    "title" => "mmm",
                    "caption" => "mmm",
                    "url" => "/mmm.gif",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/mmm.gif?zc=1",
                    "time" => 1663947165,
                    "size" => 969533,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 10:32:45 pm"
                ],
                [
                    "id" => 273,
                    "type" => "gif",
                    "title" => "sss",
                    "caption" => "sss",
                    "url" => "/sss.gif",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/sss.gif?zc=1",
                    "time" => 1663947154,
                    "size" => 483834,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 10:32:34 pm"
                ],
                [
                    "id" => 272,
                    "type" => "gif",
                    "title" => "133333",
                    "caption" => "133333",
                    "url" => "/133333.gif",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/133333.gif?zc=1",
                    "time" => 1663944637,
                    "size" => 102142,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 09:50:37 pm"
                ],
                [
                    "id" => 271,
                    "type" => "gif",
                    "title" => "122222",
                    "caption" => "122222",
                    "url" => "/122222.gif",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/122222.gif?zc=1",
                    "time" => 1663944632,
                    "size" => 1193967,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 09:50:32 pm"
                ],
                [
                    "id" => 270,
                    "type" => "gif",
                    "title" => "14444",
                    "caption" => "14444",
                    "url" => "/14444.gif",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/14444.gif?zc=1",
                    "time" => 1663944623,
                    "size" => 596082,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 09:50:23 pm"
                ],
                [
                    "id" => 269,
                    "type" => "png",
                    "title" => "novaland group logo brandlogosnet",
                    "caption" => "novaland group logo brandlogosnet",
                    "url" => "/novaland-group-logo-brandlogosnet.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/novaland-group-logo-brandlogosnet.png?zc=1",
                    "time" => 1663944432,
                    "size" => 29624,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 09:47:12 pm"
                ],
                [
                    "id" => 268,
                    "type" => "png",
                    "title" => "logo aqua city novaland",
                    "caption" => "logo aqua city novaland",
                    "url" => "/logo-aqua-city-novaland.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/logo-aqua-city-novaland.png?zc=1",
                    "time" => 1663944403,
                    "size" => 167397,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 09:46:43 pm"
                ],
                [
                    "id" => 267,
                    "type" => "png",
                    "title" => "logo phu cuong final 1",
                    "caption" => "logo phu cuong final 1",
                    "url" => "/logo-phu-cuong-final-1.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/logo-phu-cuong-final-1.png?zc=1",
                    "time" => 1663944287,
                    "size" => 119845,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 09:44:47 pm"
                ],
                [
                    "id" => 266,
                    "type" => "png",
                    "title" => "logo vinpearl",
                    "caption" => "logo vinpearl",
                    "url" => "/logo-vinpearl.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/logo-vinpearl.png?zc=1",
                    "time" => 1663944282,
                    "size" => 13685,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 09:44:42 pm"
                ],
                [
                    "id" => 265,
                    "type" => "png",
                    "title" => "vinhomes logosvg",
                    "caption" => "vinhomes logosvg",
                    "url" => "/vinhomes-logosvg.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/vinhomes-logosvg.png?zc=1",
                    "time" => 1663944278,
                    "size" => 50035,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 09:44:38 pm"
                ],
                [
                    "id" => 264,
                    "type" => "png",
                    "title" => "logo hung thinh land",
                    "caption" => "logo hung thinh land",
                    "url" => "/logo-hung-thinh-land.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/logo-hung-thinh-land.png?zc=1",
                    "time" => 1663944272,
                    "size" => 14227,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 09:44:32 pm"
                ],
                [
                    "id" => 263,
                    "type" => "jpg",
                    "title" => "301983239 111278318378083 1908441941880322563 n",
                    "caption" => "301983239 111278318378083 1908441941880322563 n",
                    "url" => "/301983239-111278318378083-1908441941880322563-n.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/301983239-111278318378083-1908441941880322563-n.jpg?zc=1",
                    "time" => 1663940896,
                    "size" => 278215,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:48:16 pm"
                ],
                [
                    "id" => 262,
                    "type" => "png",
                    "title" => "logo obn land",
                    "caption" => "logo obn land",
                    "url" => "/logo-obn-land.png",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/logo-obn-land.png?zc=1",
                    "time" => 1663939867,
                    "size" => 101404,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:31:07 pm"
                ],
                [
                    "id" => 261,
                    "type" => "jpg",
                    "title" => "6",
                    "caption" => "6",
                    "url" => "/6.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/6.jpg?zc=1",
                    "time" => 1663939616,
                    "size" => 167889,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:26:56 pm"
                ],
                [
                    "id" => 254,
                    "type" => "jpg",
                    "title" => "1",
                    "caption" => "1",
                    "url" => "/1.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/1.jpg?zc=1",
                    "time" => 1663939615,
                    "size" => 147172,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:26:55 pm"
                ],
                [
                    "id" => 255,
                    "type" => "jpg",
                    "title" => "2",
                    "caption" => "2",
                    "url" => "/2.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/2.jpg?zc=1",
                    "time" => 1663939615,
                    "size" => 165109,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:26:55 pm"
                ],
                [
                    "id" => 256,
                    "type" => "jpg",
                    "title" => "3",
                    "caption" => "3",
                    "url" => "/3.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/3.jpg?zc=1",
                    "time" => 1663939615,
                    "size" => 205465,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:26:55 pm"
                ],
                [
                    "id" => 257,
                    "type" => "jpg",
                    "title" => "4",
                    "caption" => "4",
                    "url" => "/202655-4.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/202655-4.jpg?zc=1",
                    "time" => 1663939615,
                    "size" => 243295,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:26:55 pm"
                ],
                [
                    "id" => 258,
                    "type" => "jpg",
                    "title" => "5",
                    "caption" => "5",
                    "url" => "/5.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/5.jpg?zc=1",
                    "time" => 1663939615,
                    "size" => 219941,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:26:55 pm"
                ],
                [
                    "id" => 259,
                    "type" => "jpg",
                    "title" => "7",
                    "caption" => "7",
                    "url" => "/7.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/7.jpg?zc=1",
                    "time" => 1663939615,
                    "size" => 212308,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:26:55 pm"
                ],
                [
                    "id" => 260,
                    "type" => "jpg",
                    "title" => "8",
                    "caption" => "8",
                    "url" => "/202655-8.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/202655-8.jpg?zc=1",
                    "time" => 1663939615,
                    "size" => 201051,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:26:55 pm"
                ],
                [
                    "id" => 253,
                    "type" => "jpg",
                    "title" => "ban do quy hoach su dung dat den nam 2030",
                    "caption" => "ban do quy hoach su dung dat den nam 2030",
                    "url" => "/ban-do-quy-hoach-su-dung-dat-den-nam-2030.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/ban-do-quy-hoach-su-dung-dat-den-nam-2030.jpg?zc=1",
                    "time" => 1663939183,
                    "size" => 579299,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:19:43 pm"
                ],
                [
                    "id" => 252,
                    "type" => "jpg",
                    "title" => "thi truong bat dong san la gi",
                    "caption" => "thi truong bat dong san la gi",
                    "url" => "/thi-truong-bat-dong-san-la-gi.jpg",
                    "thumb" => "https://media.loveitopcdn.com/34798/thumb/150x150/thi-truong-bat-dong-san-la-gi.jpg?zc=1",
                    "time" => 1663938166,
                    "size" => 65737,
                    "disk" => "public",
                    "folder_id" => 0,
                    "folder" => null,
                    "newtime" => "Friday, 23rd Sep 2022, 08:02:46 pm"
                ],
                "total" => 30,
                "page" => 1,
                "ipp" => "30",
                "gtotal" => 252
            ];
        }
        elseif($func == 'mlib_get_import_methods') {
            $result = [
                [
                    'id' => 1,
                    'title' => 'Full URL for multiple lines',
                    'content' => '%%url%% [%%fullsize%%]<br />',
                    'contentx' => '%%url%% [%%fullsize%%]<br />',
                ],
            ];
        }
        return response()->json($result, 200,
        [
            'Content-Type' => 'text/html',
            'Charset' => 'utf-8'
        ]);
        // return response()->json($result);
    }
    public function index(Request $request)
    {
        return view(
            "{$this->pathViewController}index",
            []
        );
    }
    public function form(Request $request)
    {
        return view(
            "{$this->pathViewController}form",
            []
        );
    }
}
