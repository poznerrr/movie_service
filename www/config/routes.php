<?php

declare(strict_types=1);

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Kernel\Router\Route;

return [
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/movies', [MovieController::class, 'index']),
    Route::get('/test', function () {
        echo 'TEST';
    }),
];
