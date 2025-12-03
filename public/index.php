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


try {
    require_once './vendor/autoload.php';
    include_once './app/routes.php';
} catch (Exception $e) {
    echo $e->getMessage();
}

$env = parse_ini_file('.env');


echo '<pre>';
print_r($_SERVER);

print_r($env);
echo '</pre>';