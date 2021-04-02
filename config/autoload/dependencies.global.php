<?php

declare(strict_types=1);

use Doctrine\ORM\EntityManager;

return [
    'dependencies' => [
        'aliases' => [
            'doctrine.entity_manager.orm_default' => EntityManager::class,
        ],
        'invokables' => [],
        'factories'  => [
            EntityManager::class => \Roave\PsrContainerDoctrine\EntityManagerFactory::class,
            \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand::class => \Roave\PsrContainerDoctrine\MigrationsCommandFactory::class,
        ],
    ],
];
