<?php

use ALF\Route;
use ALF\Request;

Route::get('/', function() {
   return 'route /';
});

Route::get('/test', \App\Controllers\TestController::class, 'index');
