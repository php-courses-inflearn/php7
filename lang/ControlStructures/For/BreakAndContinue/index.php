<?php

/**
 * break [Level].
 */
for ($j = 0; $j < 10; $j++) {
    for ($i = 1; $i < 10; $i++) {
        break;
    }
    $j; // -> 0 ~ 9
}

/**
 * continue [Level].
 */
$sum = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 9; $j++) {
        continue 2;
    }
    $sum += $i; // -> 0
}
