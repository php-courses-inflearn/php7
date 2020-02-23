<?php

function foo(&$var)
{
    $var = 'Bye';
}

$var = 'Hello, World!';

foo($var);

// Bye
echo $var;
