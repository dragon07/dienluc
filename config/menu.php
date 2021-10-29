<?php

return [
    [
        'label' => 'Dashboard',
        'route' => 'admin.dashboard',
        'icon' => 'fal fa-tachometer-alt-fast'
    ],
    [
        'label' => 'Phụ thuộc',
        'route' => 'product.index',
        'icon' => 'fal fa-users',
        'items' => [
            [
                'label' => 'All Product',
                'route' => 'product.index',
            ],
            [
                'label' => 'Add Product',
                'route' => 'product.create',
            ]
        ]
    ],
    [
        'label' => 'Nộp thuế',
        'route' => 'category.index',
        'icon' => 'fal fa-tags',
        'items' => [
            [
                'label' => 'All Category',
                'route' => 'category.index',
            ],
            [
                'label' => 'Add Category',
                'route' => 'category.create',
            ]
        ]
    ],
    [
        'label' => 'Quản trị',
        'route' => 'order.index',
        'icon' => 'fal fa-columns',
        'items' => [
            [
                'label' => 'All Order',
                'route' => 'order.index',
            ],
            [
                'label' => 'Add Order',
                'route' => 'order.create',
            ]
        ]
    ],
    [
        'label' => 'Đăng xuất',
        'route' => 'blog.index',
        'icon' => 'fal fa-sign-out-alt',
    ]
];
