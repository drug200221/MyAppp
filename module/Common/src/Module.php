<?php

declare(strict_types=1);

namespace Common;

class Module
{
    public function getConfig(): array
    {
        /** @var array $config */
        $config = include __DIR__ . '/../config/module.cfg.php';
        return $config;
    }
}
