<?php

namespace Core;

use Smarty;
use Core\Tools;

class Controller
{
    public function __construct()
    {
    }

    public function setLayout($path)
    {
        $smarty = new Smarty();
        $path = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $path['path'];

        /* if ($requestPath == '/') {
            $smarty->assign(array(
                'page_content' => 'index.tpl',
                'month' => Tools::getDateMonth(),
                'fullname' => $_SESSION["name"],
                'email' => $_SESSION["email"],
                'uid' => $_SESSION["uid"]
            ));
        } else {
            $page = explode('/', $requestPath);
        $smarty->assign('page_content', $page[1] . '.tpl');
        } */

        self::checkLayout($requestPath);

        /* if ($requestPath == '/auth') {
            $page = explode('/', $requestPath);
            $smarty->assign('page_content', $page[1] . '.tpl');
            return $smarty->display('template/layouts/auth.tpl');
        } else {
            return $smarty->display('template/layouts/layout.tpl');
        } */
    }

    public function checkLayout($path)
    {
        $smarty = new Smarty();
        if ($path == '/auth') {
            $smarty->assign('page_content', $path[1] . '.tpl');
            return $smarty->display('template/layouts/auth.tpl');
        } else {
            if ($path == "/") {
                $smarty->assign('page_content', 'index.tpl');
            } else {
                $path = explode('/', $path);
                $smarty->assign('page_content', $path[1] . '.tpl');
            }
            $smarty->assign('global', self::setProjectVars());
            return $smarty->display('template/layouts/layout.tpl');
        }
    }

    public function setVars($handler)
    {
    }

    public function setProjectVars()
    {
        $vars = array(
            'month' => Tools::getDateMonth(),
            'fullname' => $_SESSION["name"],
            'email' => $_SESSION["email"],
            'uid' => $_SESSION["uid"]
        );
        return $vars;
    }
}
