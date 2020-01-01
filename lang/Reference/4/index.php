<?php

$var = 'Hello, World!';
$var2 = &$var;

unset($var);

// Hello, World!
echo $var2;
