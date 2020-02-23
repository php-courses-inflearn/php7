<?php

$options = [
    'method'  => 'POST',
    'header'  => 'Content-Type: application/x-www-form-urlencoded',
    'content' => http_build_query([
        'email'    => 'webmaster@naver.com',
        'password' => '1234',
    ]),
];

echo file_get_contents('http://localhost:3000/auth/register_process.php', false, stream_context_create(['http' => $options]));
