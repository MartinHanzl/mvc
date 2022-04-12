<?php

namespace Core;

class Tools {

    public function __construct()
    {
        
    }

    public function getPercentOf($num1, $num2) {
        $res = (double) (($num1/100)*$num2);
        echo $res;
    }

    public function whatPercent($num1, $num2) {
        $res = (double) (($num1/$num2)*100);
        echo $res;
    }
}