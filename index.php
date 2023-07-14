<?php

// Load configuration
use app\Router;

require_once 'config/config.php';

// Autoload classes
spl_autoload_register(function ($className) {
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once "$className.php";
});

// Instantiate the Router and process the request
$router = new Router();
$router->dispatch();
