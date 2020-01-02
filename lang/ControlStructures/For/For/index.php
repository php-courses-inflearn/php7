<?php

/**
 * for
 */
for ($i = 0; $i < 10; $i++) {
    $i; // -> 0 ~ 9
}

/**
 * Alternative syntax
 */
for ($i = 0; $i < 10; $i++):
    $i; // -> 0 ~ 9
endfor;