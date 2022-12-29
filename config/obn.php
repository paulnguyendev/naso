<?php
return [
    'prefix' => [
        'admin' => 'admin',
        'admin_auth' => 'admin/auth',
        'user' => 'user',
        'auth' => 'user/auth',
        'homepage' => '',
        'code' => 'NS',
    ],
    'mail' => [
        'from' => 'tinidev.com@gmail.com',
        'brand' => 'NASO.VN',
        'subject' => [
            'register_user' => 'Thông Tin Xác Thực Tài Khoản',
        ],
    ],
    'brand' => [
        'color_main' => "#e85e1e",

    ],
    'status' => [
        'setting' => [
            'order' => 'new',
            'user' => 'pending',
            'payment' => 'pending',
        ],
        'template' => [
            'pending' => [
                'name' => 'Chờ duyệt',
                'class' => 'badge-warning',
            ],
            'new' => [
                'name' => 'Đơn hàng mới',
                'class' => 'badge-warning',
            ],
            'shipping' => [
                'name' => 'Đang vận chuyển',
                'class' => 'badge-warning',
            ],
            'confirm' => [
                'name' => 'Đã xác nhận',
                'class' => 'badge-info',
            ],
            'complete' => [
                'name' => 'Hoàn tất',
                'class' => 'badge-success',
            ],
            'cancel' => [
                'name' => 'Đã hủy',
                'class' => 'badge-danger',
            ],
            'default' => [
                'name' => 'Chưa xác định',
                'class' => 'badge-info',
            ],
            'approve_success' => [
                'name' => 'Đã duyệt',
                'class' => 'badge-success',
            ],
        ],
    ],
];
