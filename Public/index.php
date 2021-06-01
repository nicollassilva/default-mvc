<?php

use CoffeeCode\Router\Router;

require '../vendor/autoload.php';

$router = new Router('http://localhost');

$router->namespace('App\Controllers');

$router->get('/', 'WebController:index');

$router->dispatch();