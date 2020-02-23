<?php

setcookie('myCookie', 'Hello, World!', time() + 60 * 60, '/', 'localhost');

// Hello, World!
echo $_COOKIE['myCookie'];
