<?php

declare(strict_types=1);

namespace App;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                'factories'  => [
                    Handler\HomePageHandler::class => Handler\HomePageHandlerFactory::class,
                ],
            ],
            'templates'    => [
                'paths' => [
                    'app'    => [__DIR__ . '/../templates/app'],
                    'error'  => [__DIR__ . '/../templates/error'],
                    'layout' => [__DIR__ . '/../templates/layout'],
                ],
            ],
        ];
    }
}
