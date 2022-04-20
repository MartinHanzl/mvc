<?php

namespace Core;

use Smarty;
use Core\App;
use Core\Tools;

class Controller
{
    public function __construct()
    {
    }

    public function setLayout()
    {
        $smarty = new Smarty();
        $path = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $path['path'];

        if ($requestPath == '/') {
            $smarty->assign(array(
                'page_content' => 'index.tpl',
                'month' => Tools::getDateMonth(),
                'fullname' => $_SESSION["name"],
                'email' => $_SESSION["email"]
            ));
            self::setGlobalVars();
        } else {
            $page = explode('/', $requestPath);
            $smarty->assign('page_content', $page[1] . '.tpl');
        }
        if ($requestPath == '/auth') {
            $page = explode('/', $requestPath);
            $smarty->assign('page_content', $page[1] . '.tpl');
            return $smarty->display('template/layouts/auth.tpl');
        } else {
            return $smarty->display('template/layouts/layout.tpl');
        }
    }

    public function setGlobalVars()
    {
        $smarty = new Smarty();
        return $smarty->assign(array(
            "fullname" => $_SESSION["email"],
            "email" => $_SESSION["email"]
        ));
    }
}
