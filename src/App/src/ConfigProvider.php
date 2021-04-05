<?php

declare(strict_types=1);

namespace App;

use Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

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
            'doctrine' => $this->getDoctrineEntities(),
            'templates'    => [
                'paths' => [
                    'app'    => [__DIR__ . '/../templates/app'],
                    'error'  => [__DIR__ . '/../templates/error'],
                    'layout' => [__DIR__ . '/../templates/layout'],
                ],
            ],
        ];
    }


    public function getDoctrineEntities(): array
    {
        return [
            'driver' => [
                'orm_default' => [
                    'class' => MappingDriverChain::class,
                    'drivers' => ['App\Entity' => 'my_entity'],
                ],
                'my_entity' => [
                    'class' => AnnotationDriver::class,
                    'cache' => 'array',
                    'paths' => [__DIR__ . '/Entity'],
                ],
            ],
        ];
    }
}
