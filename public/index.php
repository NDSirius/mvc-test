<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__)  . '/config/constants.php';

error_reporting(E_ALL);

use Core\Router as Router;

$router = new Router();

require_once dirname(__DIR__) . '/routes/web.php';

if(!preg_match('/assets/i', $_SERVER['REQUEST_URI'])) (
    $router->dispatch($_SERVER['REQUEST_URI']));
