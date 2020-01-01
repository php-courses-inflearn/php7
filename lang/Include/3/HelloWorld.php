<?php

$foo = 'Hello, World!';

function foo2()
{
    global $foo;
    $foo = 'Bye';
}
