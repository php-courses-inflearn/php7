<?php

/**
 * References
 */

$hello = 'Hello, world';
$world =& $hello;

$world = 'Who are you?';
var_dump($hello);

/**
 * Functions and Methods
 */
function foo(&$message)
{
    global $a;
    // $a =& $GLOBALS['a'];

    $message = 'Hello, world';
}

foo($message);
var_dump($message);

function &foo2()
{
    $message = 'Hello, world';
    return $message;
}

$foo2 =& foo2();
var_dump($foo2);

/**
 * Unset
 */
$foo3 =& $message;
unset($foo3);

var_dump($message);
