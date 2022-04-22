<?php

namespace Models;

use Core\Database;
use PDO;

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

    public function addContact($name, $surname, $phone, $email, $uid, $groupId)
    {
        $db = new Database();
        $sql = $db->connect()->prepare("INSERT INTO contacts_info (name, surname, phone, email, users_id_users, contacts_category_id_contacts_category) VALUES (?, ?, ?, ?, ?, ?)");

        if ($sql->execute(array($name, $surname, $phone, $email, $uid, $groupId))) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function selectAllContacts($uid)
    {
        $db = new Database();

        $sql = $db->connect()->prepare("SELECT * FROM contacts_info RIGHT JOIN contacts_goals ON contacts_goals.contacts_info_id_contact_info = contacts_info.id_contacts_info RIGHT JOIN contacts_category ON contacts_category.id_contacts_category = contacts_info.contacts_category_id_contacts_category WHERE contacts_info.users_id_users = ?");
        $sql->execute(array($uid));

        if ($sql->rowCount() > 0) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = false;
        }

        return $result;
    }

    /**
     * prohledání databáze a výběr ID kontaktu podle emailu
     *
     * @param  mixed $email
     */
    public function selectContactId($email)
    {
        $db = new Database();

        $sql = $db->connect()->prepare("SELECT id_contacts_info FROM contacts_info WHERE email = ?");
        $sql->execute(array($email));

        if ($sql->rowCount() > 0) {
            $result = $sql;
        } else {
            $result = false;
        }

        return $result;
    }

    /**
     * funkce pro přidání informací ohledně snů a cílů do databáze
     * @param  mixed $id
     * @param  mixed $now
     * @param  mixed $goal
     * @param  mixed $do
     */
    public function insertContactGoal($id, $now, $goal, $do)
    {
        $db = new Database();
        $sql = $db->connect()->prepare("INSERT INTO contacts_goals (now, goal, do, contacts_info_id_contact_info) VALUES (?, ?, ?, ?)");

        if ($sql->execute(array($id, $now, $goal, $do))) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
    
    /**
     * Vloží název skupiny
     *
     * @param  mixed $title
     */
    public function insertGroup($title, $color, $uid) {
        $db = new Database();
        $sql = $db->connect()->prepare("INSERT INTO contacts_category (category_name, category_color, users_id_users) VALUES (?, ?, ?)");

        if($sql->execute(array($title, $color, $uid))) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function selectAllGroups($uid) {
        $db = new Database;
        $sql = $db->connect()->prepare("SELECT * FROM contacts_category WHERE users_id_users = ?");
        
        $sql->execute(array($uid));
        if($sql->rowCount() > 0) {
            $result = $sql;
        } else {
            $result = false;
        }

        return $result;
    }
}
