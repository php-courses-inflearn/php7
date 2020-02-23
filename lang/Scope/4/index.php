<?php

function foo($number)
{
    // Using static variables
    static $sum = 0;
    $sum += $number;

    echo $sum;
}

// 1
foo(1);
// 6
foo(5);
