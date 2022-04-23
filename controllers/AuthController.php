<?php

namespace Controllers;

use Core\Controller;
use Core\Tools;
use Models\User;
use Core\Database;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function setSession()
    {
        $type = $_POST["type"];

        switch ($type) {
            case 'register':
                self::actionRegister();
                break;
            case 'login':
                self::actionLogin();
                break;
            case 'logout':
                self::actionLogout();
                break;
        }
    }

    public function actionRegister()
    {
        $db = new Database;
        $user = new User;
        $tools = new Tools;

        $name = filter_var($_POST["name"]);
        $surname = filter_var($_POST['surname']);
        $email = filter_var($_POST['email']);
        $password = filter_var($_POST['password_rep']);
        $password_rep = filter_var($_POST['password']);
        $vpa_no = filter_var($_POST['vpa_no']);
        $invitation_no = filter_var($_POST['invitation_no']);

        if ($user->checkInvitationNumber($invitation_no) == false && $email != 'martas.hanzl@email.cz') {
            header("Location: /auth?errorNumber");
            exit();
        } else if (self::checkPasswords($password, $password_rep) == false) {
            header("Location: /auth?errorNumber");
            exit();
        } else if ($user->checkUser($email) == false) {
            header("Location: /auth?errorUser");
            exit();
        } else {
            $password = Tools::passHash($password);
            $new_inv_no = Tools::generateRandomString();

            session_start();
            $_SESSION["name"] = $name . " " . $surname;
            $_SESSION["email"] = $email;

            $user->registerUser($name, $surname, $email, $password, $vpa_no, $new_inv_no);
            header("Location: /");
            exit();
        }
    }

    public function actionLogin()
    {
        $db = new Database;
        $user = new User;
        $tools = new Tools;

        $email = $_POST["email"];
        $password = $_POST["password"];

        if (!empty($user->checkUserLogin($email, $password))) {
            $_SESSION["name"] = "$email";
            foreach ($user->checkUserLogin($email, $password) as $res) {
                $_SESSION["name"] = $res["name"] . " " . $res["surname"];
                $_SESSION["email"] = $res["email"];
                $_SESSION["uid"] = $res["id_users"];
            }
            header("Location: /?info=Přihlášení proběhlo úspěšně");
            exit();
        } else {
            header("Location: /auth?error=Neplatný email nebo heslo");
            exit();
        }
    }

    public function actionLogout() {
        session_unset();
        session_destroy();
        header("Location: /auth");
        exit();
    }

    public function checkPasswords($password, $password_rep)
    {
        if (isset($password) && !empty($password)) {
            if (isset($password_rep) && !empty($password_rep)) {
                $result = true;
            } else {
                $result = false;
            }
        }
        return $result;
    }
}
