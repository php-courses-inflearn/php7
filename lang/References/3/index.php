<?php

$var2 = null;

function &foo($var)
{
    $GLOBALS['var2'] = $var;

    return $GLOBALS['var2'];
}

$var = &foo('Hello, World!');

// Hello, World!
echo $var;

$var = 'Bye';
// Bye
echo $var2;
