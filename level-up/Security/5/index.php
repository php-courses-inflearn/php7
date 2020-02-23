<?php

session_start();

if (empty($_SESSION['user'])) :
    $_SESSION['user'] = $_GET['user'];
endif;

echo "{$_SESSION['user']} 님 안녕하세요!";
