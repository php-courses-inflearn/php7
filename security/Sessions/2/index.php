<?php

session_save_path('sessions');

/**
 * Cookie time, GC
 */
ini_set('session.gc_maxlifetime', 3);
session_set_cookie_params(3);

session_start();
// session_gc();

/**
 * Timestamp based session.
 */
$_SESSION['timestamp'] = $_SERVER['REQUEST_TIME'];

// sleep(9);
// $time = time();
$time = strtotime('+9 seconds');

$diff = $time - $_SESSION['timestamp'];

$sessionTimeOut = 10;
if ($diff >= $sessionTimeOut) {
    // Session TimeOut
    session_destroy();
}

/**
 * Renewal session
 */
$_SESSION['timestamp'] = time();
