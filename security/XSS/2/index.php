<?php

/**
 * CSRF(Cross Site Request Forgery).
 */

session_save_path('sessions');

session_start();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $_SESSION['token'] = bin2hex(random_bytes(32));
        output_add_rewrite_var('csrf_token', $_SESSION['token']);
        echo <<<'HTML'
<form action="/" method="POST">
    <input type="hidden" name="uid" value="1">
    <input type="submit">
</form>
HTML;
        break;
    case 'POST':
        $uid = $_POST['uid'];
        if (hash_equals($_SESSION['token'], $_POST['csrf_token'])) {
            echo 'Hello, world';
        } else {
            http_response_code('400');
        }
}
