<?php


use Lumille\Application;

$app = new Application(dirname(__DIR__));

$app->singleton('config', function ($c) use ($app) {
    return new Lumille\Foundation\Config($app->getConfigs());
});

$app->singleton('route', function ($c) use ($app){
    return new Lumille\Routing\Router(\Config::get('app.namespaces.controller'), $_SERVER['REQUEST_URI']);
});

$app->singleton('view', function ($c) use ($app) {
    return new Lumille\View\View($app->getPath('path.view'), $app->getPath('path.cache'));
});


return $app;