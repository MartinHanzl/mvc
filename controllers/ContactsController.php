<?php

namespace Controllers;

use Smarty;
use Core\Controller;
use Core\Database;
use Models\Contacts;
use Core\Tools;

class ContactsController extends Controller
{
    public function __construct()
    {
    }

    public function setContactVars()
    {
        $contacts = new Contacts();
        $vars = array(
            'contacts' => $contacts->selectAllContacts($_SESSION['uid']),
            'groups' => $contacts->selectAllGroups($_SESSION['uid'])
        );

        return $vars;
    }

    public function sanitizeRequest()
    {

        $type = $_POST["type"];

        switch ($type) {
            case 'add':
                self::addContact();
                break;
            case 'group':
                self::addGroup();
                break;
            case 'edit-group':
                self::updateGroup();
                break;
        }
    }

    public function addContact()
    {
        $contact = new Contacts;

        $name = self::validateName($_POST["name"]);
        $surname = self::validateName($_POST["surname"]);
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $uid = $_SESSION["uid"];
        $now = $_POST["now"];
        $goal = $_POST["goal"];
        $do = $_POST["do"];
        $group = $_POST["group"];

        if ($contact->addContact($name, $surname, $phone, $email, $uid, $group) == true) {
            $id = $contact->selectContactId($email);
            foreach ($id as $i) {
                $cId = $i["id_contacts_info"];
            }
            if ($contact->insertContactGoal($now, $goal, $do, $cId) == true) {
                header("Location: /contacts");
                exit();
            } else {
                echo "ERROR";
            }
        } else {
            echo "ERROR";
        }
    }

    public function addGroup()
    {
        $contact = new Contacts;
        $title = $_POST["title"];
        $color = $_POST["color"];
        $uid = $_SESSION["uid"];

        if ($contact->insertGroup($title, $color, $uid) == true) {
            header("Location: /contacts");
            exit();
        } else {
            echo "error";
        }
    }

    public function updateGroup()
    {
        $title = $_POST["title"];
        $color = $_POST["color"];
        $groupId = $_POST["groupId"];
        $uid = $uid = $_SESSION["uid"];

        $contact = new Contacts;

        if (isset($_POST["group-save"])) {
            if ($contact->updateGroup($title, $color, $uid, $groupId) == true) {
                header("Location: /contacts");
                exit();
            }
        } else if (isset($_POST["group-delete"])) {
            if ($contact->removeGroup($groupId, $uid) == true) {
                header("Location: /contacts");
                exit();
            }
        }
    }
}
