<?php

return [
    [
        'label' => 'Dashboard',
        'route' => 'admin.dashboard',
        'icon' => 'fal fa-tachometer-alt-fast'
    ],
    [
        'label' => 'Nhân viên',
        'route' => 'nhan-vien.index',
        'icon' => 'fal fa-tags',
        'items' => [
            [
                'label' => 'Tất cả',
                'route' => 'nhan-vien.index',
            ],
            [
                'label' => 'Thêm mới',
                'route' => 'nhan-vien.create',
            ]
        ]
    ],
    [
        'label' => 'Phụ thuộc',
        'route' => 'phu-thuoc.index',
        'icon' => 'fal fa-users',
        'items' => [
            [
                'label' => 'Tất cả',
                'route' => 'phu-thuoc.index',
            ],
            [
                'label' => 'Thêm mới',
                'route' => 'phu-thuoc.create',
            ]
        ]
    ],
    [
        'label' => 'Quản trị ',
        'route' => 'phu-thuoc.index',
        'icon' => 'fas fa-user-shield',
        'items' => [
            [
                'label' => 'Danh sách quản trị viên',
                'route' => 'admins',
            ],
            [
                'label' => 'Vai trò và quyền',
                'route' => 'permission',
            ],
            [
                'label' => 'Thêm mới',
                'route' => 'phu-thuoc.create',
            ]
        ]
    ],
];
