<?php

/**
 * First class function.
 */
$foo2 = function () {
    return 'Hello, world';
};

$foo2(); // -> Hello ,world

/**
 * Higher-order function.
 */
function foo3(callable $callback)
{
    return $callback(); // -> Hello, world
}

foo3(
     function () {
         return 'Hello, world';
     } // -> Hello, world
);
