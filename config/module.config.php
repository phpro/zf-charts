<?php

return [
    'view_manager' => [
        'template_map' => require __DIR__  .'/../template_map.php',
    ],
    'view_helpers' => [
        'invokables' => [
            'chartjs' => 'Phpro\Chart\View\Helper\ChartJs',
        ]
    ],
    'asset_manager' => [
        'resolver_configs' => [
            'paths' => [
                __DIR__ . '/../assets',
            ],
        ],
    ],
];