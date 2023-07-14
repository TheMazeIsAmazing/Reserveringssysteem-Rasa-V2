<?php

// Load configuration
require_once 'config/config.php';

// Autoload classes
spl_autoload_register(function ($className) {
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = __DIR__ . "/app/$className.php";

    if (file_exists($file)) {
        require_once $file;
    }
});

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Instantiate the Router and process the request
$router = new Router();
$router->dispatch();
