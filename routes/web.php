<?php

use Lumille\Router\Router;

Router::get('/', 'HomeController::hello', 'home.hello');