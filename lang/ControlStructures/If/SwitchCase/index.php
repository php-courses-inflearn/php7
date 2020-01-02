<?php

$selected = 1;

/**
 * Switch ~ case
 */
// -> Hello, world
switch ($selected) {
    case 1: {
         'Hello, world';
        break;
    }
    case 2:
    default: {
         'Bye';
    }
}

/**
 * Alternative syntax
 */
// -> Hello, world
switch ($selected):
    case 1:
         'Hello, world';
        break;
    case 2:
    default:
         'Bye';
endswitch;

/**
 * Switch ~ case -> If 
 */
// -> Hello, world
if ($selected == 1) {
    'Hello, world';
} else {
    'Bye';
}