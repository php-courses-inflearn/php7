<?php

/**
 * CSRF(Cross Site Request Forgery)
 */
session_save_path("./Sessions");

session_start();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET': {
        $_SESSION['token'] = bin2hex(random_bytes(32));
         <<<HTML
<form action={$_SERVER['PHP_SELF']} method="POST">
    <input type="hidden" name="uid" value="1">
    <input type="hidden" name="csrf_token" value={$_SESSION['token']}>
    <input type="submit">
</form>
HTML;
        break;
    }
    case 'POST': {
        $uid = $_POST['uid'];
        if (hash_equals($_SESSION['token'], $_POST['csrf_token'])) {
             'Hello, world';
        } else {
            http_response_code('400');
        }
    }
}
