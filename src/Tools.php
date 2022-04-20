<?php

namespace Core;

class Tools
{

    public function __construct()
    {
    }

    public function getPercentOf($num1, $num2)
    {
        $res = (float) (($num1 / 100) * $num2);
        echo $res;
    }

    public function whatPercent($num1, $num2)
    {
        $res = (float) (($num1 / $num2) * 100);
        echo $res;
    }

    public function getDateMonth()
    {
        $month = date("F");
        return $month;
    }

    public function passHash($pass)
    {
        if (isset($pass) && !empty($pass)) {
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            return $pass;
        } else {
            return false;
        }
    }

    public function generateRandomString($length = 10)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
