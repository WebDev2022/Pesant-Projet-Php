<?php

use Dotenv\Dotenv;

require dirname(__DIR__) . '/vendor/autoload.php';
define('VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views/');

/* Displaying errors for kids */
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

/* Loading .ENV */
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

/* Start Router */
$router = new AltoRouter();
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . '/web/router.php';
$match = $router->match();

if (!$match) {
    require_once VIEW_PATH . 'layouts/error.php';
    die;
}

if ($match) {
    $controller = $match['target'][0];
    $action = $match['target'][1];

    if (is_callable(array(new $controller, $action))) {
        call_user_func_array(array(new $controller(), $action), array($match['params']));
    } else {
        throw new ErrorException('Error of Controller or Method');
    }
}

