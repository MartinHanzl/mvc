<?php

$smarty = new Smarty();

$smarty->setTemplateDir('template');
$smarty->setConfigDir('config');
$smarty->setCompileDir('compile');
$smarty->setCacheDir('cache');

// $smarty->testInstall();
$smarty->assign("surname", "tes");
$smarty->display('index.tpl');