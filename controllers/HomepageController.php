<?php

namespace Controllers;

use Core\Controller;

use Models\Contacts;

class HomepageController extends Controller
{

    public function __construct()
    {
    }

    public function setHomepageVars()
    {
        $contact = new Contacts;

        $vars = array(
            'contact' => $contact->selectAllContacts($_SESSION['uid'])
        );

        return $vars;
    }
}
