<?php

namespace Models;

use Core\Database;

class Contacts
{
    public $id_contact;
    public $name;
    public $surname;
    public $phone;
    public $email;
    public $now;
    public $goal;
    public $do;

    public function __construct()
    {
    }

    public function addContact($name, $surname, $phone, $email, $uid)
    {
        $db = new Database();
        $sql = $db->connect()->prepare("INSERT INTO contacts_info (name, surname, phone, email, users_id_users) VALUES (?, ?, ?, ?, ?)");

        if ($sql->execute(array($name, $surname, $phone, $email, $uid))) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function selectAllContacts($uid)
    {
        $db = new Database();

        $sql = $db->connect()->prepare("SELECT * FROM contacts_info WHERE users_id_users = ?");
        $sql->execute(array($uid));

        if ($sql->rowCount() > 0) {
            $result = $sql;
        } else {
            $result = false;
        }

        return $result;
    }
}
