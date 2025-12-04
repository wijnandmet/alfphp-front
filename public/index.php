<?php
use ALF\View;
use ALF\Route;


try {
    require_once './vendor/autoload.php';

    $env = parse_ini_file('.env');
    env(null, $env);

    include_once './App/routes.php';

    echo Route::load();
} catch (Exception $exception) {
    http_response_code(404);
    $view = View::load('errors/404.php');

    if ($view->exist('errors/404d.php')) {
        echo $view->with(['error' => exception_to_error($exception)])->render();
    } else {
        echo $view->with(['error' => exception_to_error($exception)])->renderFromPackage();
    }
    exit;
}

register_shutdown_function(shutdown());
