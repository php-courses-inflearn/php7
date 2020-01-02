<?php

/**
 * Define function with Parameters
 * 
 * function <name>([[datatype] <param_name> [= defualt value], ...])
 */
function foo(string $arg)
{
    $arg;
}

foo('Hello, world'); // -> Hello, world

/**
 * Define function with Rest parameters
 */
function foo2(...$args) {
    $args; // type -> array
}

foo2('Hello, world', 'Who are you?', 'Bye');

/**
 * Call function with Spread
 */
function foo3($arg1, $arg2) {
    $arg1; // -> Hello, world
    $arg2; // -> Who are you?
}

foo3(...['Hello, world', 'Who are you?']);