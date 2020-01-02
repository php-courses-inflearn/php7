<?php

$foo = 'Hello, world';

function foo2()
{
    global $foo;
    $foo = 'Bye';
}
