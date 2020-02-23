<?php

$foo = 'Hello, World!';

function foo2()
{
    // Using global variables
    $GLOBALS['foo'] = 'Bye';
    echo $GLOBALS['foo'];
}
// Bye
foo2();
// Bye
echo $foo;
