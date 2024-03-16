<?php

require __DIR__ . '/../vendor/autoload.php';


use Slim\Factory\AppFactory;
use Mvc\Controllers\HomeControllers;
use Mvc\Controllers\UsersControllers;


$app = AppFactory::create();

// Define app routes
$app->get('/', HomeControllers::class.":home");

$app->get('/register-users', UsersControllers::class.":register");


$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);


// Run app
$app->run();

