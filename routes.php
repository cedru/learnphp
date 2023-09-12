<?php

use App\Router;
use App\Controllers\PublicController;

Router::get('/', [App\Controllers\PublicController::class, 'home']);
Router::get('/about', [App\Controllers\PublicController::class, 'about']);

Router::get('/test', [App\Controllers\PublicController::class, 'test']);
Router::post('/test', [App\Controllers\PublicController::class, 'testAnswer']);