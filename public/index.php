<?php
use ALF\View;
use ALF\Route;

function shutdown()
{
    $error = error_get_last();
    if ($error) {
        http_response_code(404);
        echo View::load('errors/404.php')->with(['error' => error_get_last()])->render();
    }
}


$env = parse_ini_file('.env');
env(null, $env);

try {
    require_once './vendor/autoload.php';
    include_once './App/routes.php';

    echo Route::load();
} catch (Exception $exception) {
    http_response_code(404);
    $view = View::load('errors/404.php');
    if ($view->exist('errors/404.php')) {
        echo $view->with(['error' => $exception])->render();
    } else {
        echo $view->with(['error' => $exception])->renderFromPackage();
    }
    exit;
}

register_shutdown_function('shutdown');
