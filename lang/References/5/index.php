<?php

$var = 'Hello, World!';

function foo()
{
    // $foo =& $GLOBALS['foo']
    global $var;
    $var = 'Bye';
}

foo();
// Bye
echo $var;
