<?php

require 'config/settings.php';
require 'vendor/autoload.php';

use Core\Database;

use Tracy\Debugger;

// Debugger::enable(Debugger::DEVELOPMENT);

// require 'src/Smarty_inc.php';

new Database();

use Core\Application;
use Core\SiteController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);

$app->router->get('/contact', [SiteController::class, 'contact']);

$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->run();