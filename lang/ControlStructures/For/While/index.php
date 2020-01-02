<?php

/**
 * while
 */
$i = 0;
while ($i < 10) {
    $i++; // -> 0 ~ 9
}

/**
 * do ~ while
 */
$i = 0;
do {
    $i++; // -> 0 ~ 9
} while($i < 10);

/**
 * Alternative syntax
 */
$i = 0;
while ($i < 10):
    $i++; // -> 0 ~ 9
endwhile;