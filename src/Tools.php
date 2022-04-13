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

    public function toLower($string)
    {
        if (isset($string)) {
            $string = strtolower($string);
            return $string;
        } else {
            return false;
        }
    }

    public function toUpper($string)
    {
        if (isset($string)) {
            $string = strtoupper($string);
            return $string;
        } else {
            return false;
        }
    }
}
