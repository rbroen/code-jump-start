<?php

use Doctrine\ORM\EntityManager;

$container = require 'container.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(
    $container->get(EntityManager::class)
);

