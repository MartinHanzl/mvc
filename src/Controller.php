<?php

namespace Core;

use Smarty;
use Core\Tools;
use Controllers\ContactsController;
use Controllers\HomepageController;
use Models\Contacts;

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

        self::checkLayout($requestPath);
    }

    public function checkLayout($path)
    {
        $smarty = new Smarty();
        $contacts = new ContactsController();
        $home = new HomepageController();

        if ($path == '/auth') {
            $smarty->assign('page_content', 'auth.tpl');
            return $smarty->display('template/layouts/auth.tpl');
        } else {
            if ($path == "/") {
                $smarty->assign('page_content', 'index.tpl');
                $smarty->assign('home', self::setHomepageVars());
            } else {
                $path = explode('/', $path);
                $smarty->assign('page_content', $path[1] . '.tpl');
                // $smarty->assign($path[1], $contacts->setContactVars());
                $smarty->assign('contacts', self::setTemplateVars($path[1]));
            }
            $smarty->assign('global', self::setProjectVars());
            return $smarty->display('template/layouts/layout.tpl');
        }
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

    public function setTemplateVars($path)
    {
        $smarty = new Smarty();
        switch ($path) {
            case 'contacts':
                $contacts = new ContactsController;
                $result = $contacts->setContactVars();
                break;
        }

        return $result;
    }

    public function setHomepageVars()
    {
        $contact = new Contacts;

        $limit = 1;
        $vars = array(
            'contact' => $contact->selectAllContacts($_SESSION['uid'], 5)
        );

        return $vars;
    }

    public function validateName($name)
    {
        $name = filter_var($name, FILTER_DEFAULT);
        // $pattern = "[A-Za-z]";
        // $result = preg_match($pattern, $name);
        return $name;
    }
}
