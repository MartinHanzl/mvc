<?php

require 'config/settings.php';
require 'vendor/autoload.php';
require 'src/Tracy_inc.php';
require 'src/Smarty_inc.php';

use Core\App;
use Core\Controller;
use Controllers\AuthController;

$app = new App();

$app->get('/', [Controller::class, 'setLayout']);

$app->get('/auth', [Controller::class, 'setLayout']);
$app->post('/auth', [AuthController::class, 'actionRegister']);

$app->run();