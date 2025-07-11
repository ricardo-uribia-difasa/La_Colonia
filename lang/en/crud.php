<?php

return [
    'users' => [
        'itemTitle' => 'User',
        'collectionTitle' => 'Users',
        'inputs' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Name',
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'Email',
            ],
            'password' => [
                'label' => 'Password',
                'placeholder' => 'Password',
            ],
            'deleted_at' => [
                'label' => 'Deleted at',
                'placeholder' => 'Deleted at',
            ],
        ],
    ],
    'productos' => [
        'itemTitle' => 'Producto',
        'collectionTitle' => 'Productos',
        'inputs' => [
            'codigo_barras' => [
                'label' => 'Codigo barras',
                'placeholder' => 'Codigo barras',
            ],
            'nombre' => [
                'label' => 'Nombre',
                'placeholder' => 'Nombre',
            ],
            'descripcion' => [
                'label' => 'Descripcion',
                'placeholder' => 'Descripcion',
            ],
            'stock' => [
                'label' => 'Stock',
                'placeholder' => 'Stock',
            ],
            'precio' => [
                'label' => 'Precio',
                'placeholder' => 'Precio',
            ],
            'iva' => [
                'label' => 'Iva',
                'placeholder' => 'Iva',
            ],
        ],
        'filament' => [
            'codigo_barras' => [
                'helper_text' => '',
                'label' => '',
                'description' => '',
            ],
            'nombre' => [
                'helper_text' => '',
                'label' => '',
                'description' => '',
            ],
            'descripcion' => [
                'helper_text' => '',
                'label' => '',
                'description' => '',
            ],
            'stock' => [
                'helper_text' => '',
                'label' => '',
                'description' => '',
            ],
            'precio' => [
                'helper_text' => '',
                'label' => '',
                'description' => '',
            ],
            'iva' => [
                'helper_text' => '',
                'loading_message' => '',
                'no_result_message' => '',
                'search_message' => '',
                'label' => '',
            ],
        ],
    ],
];
