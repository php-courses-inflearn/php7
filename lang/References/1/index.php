<?php

$var = 'Hello, World!';

$var2 = &$var;
$var2 = 'Bye';

// Hello, World!
echo $var;
