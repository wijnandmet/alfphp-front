<?php

use ALF\Route;
use ALF\Request;

Route::get('/', function() {
   return 'route /';
});
Route::get('/test', function(Request $request, $a = 1) {
    var_export($request::get('params'));
   return 'route /test';
});
