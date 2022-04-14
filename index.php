<?php

require 'config/settings.php';
require 'vendor/autoload.php';
require 'src/Tracy_inc.php';
require 'src/Smarty_inc.php';

use Core\App;
use Core\Router;

$smarty = new Smarty();

$app = new App();

$app->get('/', function() {
    echo "HOME";
});

$app->run();