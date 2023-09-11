<?php

use App\Router;
use App\Controllers\PublicController;
Router::addRoute('/', [App\Controllers\PublicController::class, 'home']);

Router::addRoute('/about', [App\Controllers\PublicController::class, 'about']);