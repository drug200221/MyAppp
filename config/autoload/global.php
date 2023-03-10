<?php

/**
 * Global Configuration Override
 *
 * You can Blog this file for overriding configuration values from module, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

use Laminas\Db\Adapter;

return [
    'service_manager' => [
        'abstract_factories' => [
            Adapter\AdapterAbstractServiceFactory::class,
        ],
        'factories' => [
            Adapter\AdapterInterface::class => Adapter\AdapterServiceFactory::class,
        ],
        'aliases' => [
            Adapter\Adapter::class => Adapter\AdapterInterface::class,
        ],
    ],
    'db' => [
        'driver'   => 'Pdo_mysql',
        'charset'  => 'utf8',
        'database' => 'quiz',
        'hostname' => 'mysql',
        'port'     => '3306',
        'options'  => [
            'buffer_results' => true,
        ],
    ],
];
