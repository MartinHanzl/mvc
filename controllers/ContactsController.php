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
            'groups' => $contacts->selectAllGroups($_SESSION['uid']),
            'data' => array(
                'number' => $contacts->selectNumberContacts($_SESSION['uid']),
                'now' => $contacts->selectNow($_SESSION['uid']),
                'goal' => $contacts->selectGoal($_SESSION['uid']),
                'do' => $contacts->selectDo($_SESSION['uid']),
            )
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
            case 'delete-contact':
                self::removeContact();
                break;
            case 'update':
                self::updateContact();
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

    public function removeContact()
    {
        $contact = new Contacts;

        $cid = $_POST["cid"];
        $uid = $_SESSION["uid"];

        if ($contact->deleteContact($cid, $uid) == true) {
            header("Location: /contacts");
            exit();
        } else {
            echo "false";
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

    public function updateContact()
    {
        $contact = new Contacts;

        $name = self::validateName($_POST["name"]);
        $surname = $_POST["surname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $now = $_POST["now"];
        $goal = $_POST["goal"];
        $do = $_POST["do"];
        $cid = $_POST["updId"];

        if ($contact->updateContact($cid, $name, $surname, $phone, $email, $now, $goal, $do) == true) {
            header("Location: /contacts");
            exit();
        } else {
            echo "NIC";
        }
    }
}
