<?php

use Lumille\Application;

session_start();

if (env('DEBUG', false)) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}


$app = new Application(dirname(__DIR__));

$app->singleton('config', function ($c) use ($app) {
    return new Lumille\Foundation\Config($app->getConfigs());
});

$app->singleton('route', function ($c) use ($app){
    return new Lumille\Routing\Router($app->getRequest()->getOriginal());
});

$app->singleton('view', function ($c) use ($app) {
    return new Lumille\View\View($app->getPath('path.view'), $app->getPath('path.cache'));
});


return $app;