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
    // global $hello;
    $hello =& $GLOBALS['hello'];
    $hello = 'Bye';

    $message = 'Hello, world';
}

foo($message);
var_dump($message);

var_dump($hello);

function &foo2()
{
    $sayHello = 'Hello, world';
    return $sayHello;
}

$foo2 =& foo2();
var_dump($foo2);

/**
 * Unset
 */
$foo3 =& $message;
unset($foo3);

var_dump($message);
