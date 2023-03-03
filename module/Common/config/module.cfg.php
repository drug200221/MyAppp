<?php

declare(strict_types=1);

namespace Common;

use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'common' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/common[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
        ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../src/Resources/templates/layout/layout.phtml',
            'common/index/index' => __DIR__ . '/../src/Resources/templates/common/index/index.phtml',
            'error/404'               => __DIR__ . '/../src/Resources/templates/error/404.phtml',
            'error/index'             => __DIR__ . '/../src/Resources/templates/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../src/Resources/templates',
        ],
    ],
];
