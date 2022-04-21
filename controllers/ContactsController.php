<?php

namespace Controllers;

use Smarty;
use Core\Controller;
use Models\Contacts;

class ContactsController extends Controller
{
    public function __construct()
    {
    }

    public function sanitizeRequest()
    {

        $type = $_POST["type"];

        switch ($type) {
            case 'add':
                self::addContact();
                break;
        }
    }

    public function addContact()
    {
        $contact = new Contacts;

        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $uid = $_SESSION["uid"];

        if ($contact->addContact($name, $surname, $phone, $email, $uid) == true) {
            header("Location: /contacts");
            exit();
        } else {
            echo "ERROR";
        }
    }

    public function renderContacts() {
        $smarty = new Smarty;
        $contacts = new Contacts;

        $smarty->assign('contacts', $contacts->selectAllContacts($_SESSION["uid"]));
    }
}
