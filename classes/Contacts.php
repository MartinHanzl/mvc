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

    public function selectAllContacts($uid, $limit = null)
    {
        $db = new Database();

        if (!empty($limit)) {
            $sql = $db->connect()->prepare("SELECT * FROM contacts_info RIGHT JOIN contacts_goals ON contacts_goals.contacts_info_id_contact_info = contacts_info.id_contacts_info RIGHT JOIN contacts_category ON contacts_category.id_contacts_category = contacts_info.contacts_category_id_contacts_category WHERE contacts_info.users_id_users = ? LIMIT $limit");
            $sql->execute(array($uid));
        } else {
            $sql = $db->connect()->prepare("SELECT * FROM contacts_info RIGHT JOIN contacts_goals ON contacts_goals.contacts_info_id_contact_info = contacts_info.id_contacts_info RIGHT JOIN contacts_category ON contacts_category.id_contacts_category = contacts_info.contacts_category_id_contacts_category WHERE contacts_info.users_id_users = ?");
            $sql->execute(array($uid));
        }

        if ($sql->rowCount() > 0) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = false;
        }

        return $result;
    }

    public function selectNumberContacts($uid)
    {
        $db = new Database;

        $sql = $db->connect()->prepare("SELECT COUNT(*) numberOfContact FROM contacts_info WHERE users_id_users = ?");

        $sql->execute(array($uid));

        if ($sql->rowCount() > 0) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = false;
        }

        return $result;
    }

    public function selectNow($uid)
    {
        $db = new Database;

        $sql = $db->connect()->prepare("SELECT COUNT(now) number FROM contacts_goals LEFT JOIN contacts_info ON contacts_info.id_contacts_info = contacts_goals.contacts_info_id_contact_info WHERE now != '' AND contacts_info.users_id_users = ?");

        $sql->execute(array($uid));

        if ($sql->rowCount() > 0) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = false;
        }

        return $result;
    }

    public function selectGoal($uid)
    {
        $db = new Database;

        $sql = $db->connect()->prepare("SELECT COUNT(goal) goalNumber FROM contacts_goals LEFT JOIN contacts_info ON contacts_info.id_contacts_info = contacts_goals.contacts_info_id_contact_info WHERE goal != '' AND contacts_info.users_id_users = ?");

        $sql->execute(array($uid));

        if ($sql->rowCount() > 0) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = false;
        }

        return $result;
    }

    public function selectDo($uid)
    {
        $db = new Database;

        $sql = $db->connect()->prepare("SELECT COUNT(do) doNumber FROM contacts_goals LEFT JOIN contacts_info ON contacts_info.id_contacts_info = contacts_goals.contacts_info_id_contact_info WHERE do != '' AND contacts_info.users_id_users = ?");

        $sql->execute(array($uid));

        if ($sql->rowCount() > 0) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = false;
        }

        return $result;
    }

    public function updateContact($cid, $name, $surname, $phone, $email, $now, $goal, $do)
    {
        $db = new Database;

        $sql = $db->connect()->prepare("UPDATE contacts_info SET name=?, surname=?, phone=?, email=? WHERE id_contacts_info=?");
        if ($sql->execute(array($name, $surname, $phone, $email, $cid))) {
            $upd = $db->connect()->prepare("UPDATE contacts_goals SET now=?, goal=?, do=? WHERE contacts_info_id_contact_info=?");
            if ($upd->execute(array($now, $goal, $do, $cid))) {
                $result = true;
            } else {
                $result = false;
            }
        } else {
            $result = false;
        }

        return $result;
    }

    public function deleteContact($cid, $uid)
    {
        $db = new Database;

        $sqlGoal = $db->connect()->prepare("DELETE FROM contacts_goals WHERE contacts_info_id_contact_info = ?");
        if ($sqlGoal->execute(array($cid))) {
            $sql = $db->connect()->prepare("DELETE FROM contacts_info WHERE id_contacts_info = ? AND users_id_users = ?");

            if ($sql->execute(array($cid, $uid))) {
                $result = true;
            } else {
                $result = false;
            }
        }
        return $result;
    }

    /**
     * prohled??n?? datab??ze a v??b??r ID kontaktu podle emailu
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
     * funkce pro p??id??n?? informac?? ohledn?? sn?? a c??l?? do datab??ze
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
     * Vlo???? n??zev skupiny
     *
     * @param  mixed $title
     */
    public function insertGroup($title, $color, $uid)
    {
        $db = new Database();
        $sql = $db->connect()->prepare("INSERT INTO contacts_category (category_name, category_color, users_id_users) VALUES (?, ?, ?)");

        if ($sql->execute(array($title, $color, $uid))) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function selectAllGroups($uid)
    {
        $db = new Database;
        $sql = $db->connect()->prepare("SELECT * FROM contacts_category WHERE users_id_users = ?");

        $sql->execute(array($uid));
        if ($sql->rowCount() > 0) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = false;
        }

        return $result;
    }

    public function updateGroup($title, $color, $uid, $groupId)
    {
        $db = new Database;

        $sql = $db->connect()->prepare("UPDATE contacts_category SET category_name=?, category_color=? WHERE users_id_users = ? AND id_contacts_category = ?");
        if ($sql->execute(array($title, $color, $uid, $groupId))) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function removeGroup($groupId, $uid)
    {
        $db = new Database;
        $sql = $db->connect()->prepare("DELETE FROM contacts_category WHERE id_contacts_category = ? AND users_id_users = ?");

        if ($sql->execute(array($groupId, $uid))) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
}
