<?php

use Baseons\Router\Route;

// --------------------------------------------------------------------------|
//                               API ROUTES                                  |
// --------------------------------------------------------------------------|

Route::namespace('App\Controllers\Api')->name('api')->rateLimiter(60)->group(function () {
    Route::get('example', 'Example@get');
});
