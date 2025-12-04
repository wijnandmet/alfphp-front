<?php

use ALF\Route;
use ALF\Request;

Route::get('/', function(Request $request) {
   return \ALF\View::load('index.php')->render();
});

Route::get('/test', \App\Controllers\TestController::class, 'index');
