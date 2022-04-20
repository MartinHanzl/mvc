<?php

namespace Models;

use Core\Database;
use PDO;

class User
{
    public $name;
    public $surname;
    public $email;
    public $password;
    public $vpa_no;
    public $invitation_no;
    public Database $db;

    public function __construct()
    {
    }

    public function registerUser($name, $surname, $email, $password, $vpa_no, $invitation_no)
    {
        $db = new Database();

        $sql = $db->connect()->prepare("INSERT INTO users (name, surname, email, password, vpa_no, invitation_no) 
        VALUES (?, ?, ?, ?, ?, ?)");

        if ($sql->execute(array($name, $surname, $email, $password, $vpa_no, $invitation_no))) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function checkInvitationNumber($invitation_no)
    {
        $db = new Database;

        $sql = $db->connect()->prepare("SELECT * FROM users WHERE invitation_no = ?");
        $sql->execute(array($invitation_no));

        if ($sql->rowCount() > 0) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function checkUser($email)
    {
        $db = new Database;
        $stmt = $db->connect()->prepare('SELECT * FROM users WHERE email = ?');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            exit();
        }

        if ($stmt->rowCount() > 0) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    public function checkUserLogin($email, $password)
    {
        $db = new Database;

        $stmt = $db->connect()->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam('email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $res) {
            $pwdDb = $res["password"];
        }

        if(password_verify($password, $pwdDb)) {
            return $result;
        }
    }
}
