<?php

session_start();

$_SESSION['mySession'] = 'Hello, World!';

// Hello, World!
echo $_SESSION['mySession'];
