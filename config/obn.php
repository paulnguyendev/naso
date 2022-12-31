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
            'active' => [
                'name' => 'Kích hoạt',
                'class' => 'badge-success',
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
    'ticket' => [
        'status' => [
            'pending' => ['name' => 'Chờ xử lý', 'class' => "bg-warning"],
            'receive' => ['name' => 'Đã tiếp nhận', 'class' => "bg-success"],
            'process' => ['name' => 'Đang xử lý', 'class' => "bg-info"],
            'cancel' => ['name' => 'Đã hủy', 'class' => "bg-danger"],
            'replied'    => ['name' => 'Đã trả lời', 'class' => "bg-info"],
            'complete'    => ['name' => 'Đã xử lý', 'class' => "bg-success"],
            'default' => [
                'name' => 'Chưa xác định',
                'class' => 'badge-info',
            ],
        ],
        'type' => [
            'team' => ['name' => 'Đội nhóm'],
            'product' => ['name' => 'Sản phẩm'],
            'order' => ['name' => 'Đơn hàng'],
            'customer' => ['name' => 'Khách hàng'],
            'income' => ['name' => 'Doanh thu'],
        ],
    ],
];
