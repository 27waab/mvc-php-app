<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\Controllers\MovieController;

$router = new Router();

$router->get('/movies', [MovieController::class, 'index']);

$router->dispatch($_SERVER['REQUEST_URI']);