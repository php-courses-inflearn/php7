<?php

$curl = curl_init('http://localhost:3000/auth/register_process.php');

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, [
    'email'    => 'webmaster@naver.com',
    'password' => '1234',
]);

// HTTP POST 요청
curl_exec($curl);
