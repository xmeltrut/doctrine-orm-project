<?php

require('vendor/autoload.php');

$entityManager = \App\Service\DatabaseFactory::create();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
