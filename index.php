<?php

require 'config/settings.php';
require 'vendor/autoload.php';
require 'src/Tracy_inc.php';
require 'src/Smarty_inc.php';

use Core\App;
use Core\Controller;
use Controllers\AuthController;
use Controllers\ContactsController;

session_start();

$app = new App();

$app->get('/', [Controller::class, 'setLayout']);

$app->get('/auth', [Controller::class, 'setLayout']);
$app->post('/auth', [AuthController::class, 'setSession']);

$app->get('/profile', [Controller::class, 'setLayout']);

$app->get('/contacts', [Controller::class, 'setLayout']);
$app->post('/contacts', [ContactsController::class, 'sanitizeRequest']);

$app->run();