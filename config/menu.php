<?php

return [
    [
        'label' => 'Dashboard',
        'route' => 'admin.dashboard',
        'icon' => 'fal fa-tachometer-alt-fast'
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
];
