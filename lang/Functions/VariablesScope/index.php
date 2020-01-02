<?php

/**
 * Access Global Variables
 */
$message = 'Hello, world';

function foo()
{
    $message; // -> Not define Variable (Local)
    
    global $message;
    $message; // -> Hello, world
    $GLOBALS['message']; // -> Hello, world
}

foo();

/**
 * Static variables
 */
function foo2()
{
    static $foo = 0;
    ++$foo;
}

foo2(); // -> 1
foo2(); // -> 2

/**
 * Clousre
 */
function foo4($arg)
{
     return function () use ($arg) {
          return $arg;
     };
}

$fn = foo4('Hello, world');
$fn(); // -> Hello, world