<?php

use App\Service\DatabaseFactory;
use App\Service\Templating;
use Slim\Factory\AppFactory;

require('../vendor/autoload.php');

// initialise application
$app = AppFactory::create();

// register services
$container = $app->getContainer();

$container['db'] = function() {
    return DatabaseFactory::create();
};

$container['templating'] = function() {
    return new Templating;
};

// define page routes
$app->get('/', '\App\Controller\DefaultController:homepage');

// finish
$app->run();
