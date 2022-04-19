<?php

namespace Core;

use Smarty;
use Core\App;

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

        if($requestPath == '/') {
            $smarty->assign('page_content', 'index.tpl');
        } else {
            $page = explode('/', $requestPath);
            $smarty->assign('page_content', $page[1] . '.tpl');
        }
        return $smarty->display('template/layouts/layout.tpl');
    }

    function deleteCache() {
        return rmdir('/templates_c');
    }
}
