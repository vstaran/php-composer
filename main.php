<?php

    include "vendor/autoload.php";

    $mycalc = new \Liba\MyCalc(12, 6);

    echo $mycalc->add() . "\n"; // Displays 18
    echo $mycalc->multiply() . "\n"; // Displays 72
    echo $mycalc->subtract() . "\n"; // Displays 6
    echo $mycalc->divide() . "\n"; // Displays 2
