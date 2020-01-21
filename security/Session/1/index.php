<?php

session_save_path('sessions');
session_start();

/**
 * # Cookie.
 *
 * /?PHPSESSID=123456789
 *
 * session.use_strict_mode
 *
 * session.use_cookies
 * session.use_only_cookies
 */
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $_SESSION['message'] = 'Hello, world';
        echo $_SESSION['message'];
        break;
}
exit;

/**
 * # Javascript Injection.
 *
 * session.cookie_httpOnly
 */
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo '<script>document.write(document.cookie)</script>';
        break;
}
exit;

/**
 * # Https.
 *
 * session.cookie_secure
 */
