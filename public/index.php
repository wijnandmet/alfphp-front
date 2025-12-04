<?php
use ALF\View;
use ALF\Route;

try {
    require_once './vendor/autoload.php';
    env(null, parse_ini_file('.env'));
    include_once './App/routes.php';

    echo Route::load();
} catch (Exception $exception) {
    http_response_code(404);
    echo View::load('errors/404.php')->with(['error' => exception_to_error($exception)])->render();
    exit;
}

register_shutdown_function('shutdown');