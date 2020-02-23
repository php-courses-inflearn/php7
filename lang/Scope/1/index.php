<?php

$foo = 'Hello, World!';

function foo2()
{
    $foo = 'Bye';
    echo $foo;
}
// Bye
foo2();
// Hello, World!
echo $foo;
