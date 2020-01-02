<?php

/**
 * Define function
 */
function foo()
{
    'Hello, world';
}

foo(); // -> Hello, world

/**
 * Variables function
 */
function foo2()
{
     return 'Hello, world';
}
$fnName = 'foo2';
// $fnName();
'foo2'(); // -> Hello, world