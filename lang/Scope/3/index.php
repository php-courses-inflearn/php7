<?php

$foo = 'Hello, World!';

function foo2()
{
    // Using global variables
    global $foo;

    $foo = 'Bye';
    echo $foo;
}
// Bye
foo2();
// Bye
echo $foo;
