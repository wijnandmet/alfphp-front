<?php
function shutdown()
{
    // This is our shutdown function, in
    // here we can do any last operations
    // before the script is complete.
    print_r(error_get_last());

    echo 'Script executed with success', PHP_EOL;
}

register_shutdown_function('shutdown');

$env = parse_ini_file('.env');

echo '<pre>';
print_r($env);
echo '</pre>';

try {
    require_once './vendor/autoload.php';
    include_once './app/routes.php';

    $response = \ALF\Route::load();
    echo $response;
} catch (Exception $e) {
    echo $e->getMessage();
}



