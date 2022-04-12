<?php

require 'config/settings.php';
require 'vendor/autoload.php';
require 'src/Tracy_inc.php';
require 'src/Smarty_inc.php';

use Core\SiteController;
use Core\Application;

$app = new Application(dirname(__DIR__));

// $smarty->display('template/index.tpl');

$app->router->get('/', [SiteController::class, 'index']);

// $app->router->get('/contact', [SiteController::class, 'contact']);

// $app->router->post('/contact', [app\controllers\SiteController::class, 'handleContact']);

// $app->router->get('/login', [app\controllers\AuthController::class, 'login']);
// $app->router->post('/login', [app\controllers\AuthController::class, 'login']);

// $app->router->get('/register', [app\controllers\AuthController::class, 'register']);
// $app->router->post('/register', [app\controllers\AuthController::class, 'register']);

$app->run();
