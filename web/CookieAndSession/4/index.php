<?php

// PHP Warning:  Cannot modify header information - headers already sent by
echo 'Hello, World!';

setcookie('myCookie', 'Hello, World!');

// Hello, World!
echo $_COOKIE['myCookie'];
