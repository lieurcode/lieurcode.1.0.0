<?php

use Lieurcode\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\TopupController;

Router::get('/', [HomeController::class, 'index']);
Router::get('/topup', [TopupController::class, 'index']);
Router::post('/topup/store', [TopupController::class, 'store']);
