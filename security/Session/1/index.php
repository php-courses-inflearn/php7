<?php

/**
 * Session
 */
session_save_path("./Sessions");

session_start();

if (!array_key_exists('user', $_SESSION)) {
    $_SESSION['user'] = filter_input(INPUT_GET, 'user', FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_URL);
}

 $_SESSION['user'];