<?php

require 'config/settings.php';
require 'vendor/autoload.php';
require 'src/Tracy_inc.php';
require 'src/Smarty_inc.php';

use Core\App;
use Core\Controller;

$smarty = new Smarty();

$app = new App();

$app->get('/', [Controller::class, 'setLayout']);

$app->get('/about', [Controller::class, 'setLayout']);

$app->run();