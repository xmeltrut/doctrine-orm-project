<?php

use App\Service\DatabaseFactory;
use App\Service\Templating;
use DI\Container;
use Slim\Factory\AppFactory;

require('../vendor/autoload.php');

// register services
$container = new Container();

/*$container->set('db', function() {
    return DatabaseFactory::create();
});*/

$container->set('templating', function() {
    return new Templating;
});

AppFactory::setContainer($container);

// initialise application
$app = AppFactory::create();

// define page routes
$app->get('/', '\App\Controller\DefaultController:homepage');
//$app->get('/', \App\Controller\DefaultController::class . ':homepage');

// finish
$app->run();
