<?php

$var = 'Hello, World!';

$var2 = &$var;
$var2 = 'Bye';

// Bye
echo $var;
