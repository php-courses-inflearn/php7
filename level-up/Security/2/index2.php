<?php

session_start();

$uid = $_POST['uid'];

if (hash_equals($_SESSION['token'], $_POST['csrf_token'])) :
    echo 'Hello, World!';
else :
    header('HTTP/1.1 400 Bad request');
    echo json_encode([
        'message' => '400 Bad request',
    ]);
endif;
