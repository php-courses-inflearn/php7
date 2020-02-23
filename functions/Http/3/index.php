<?php

$curl = curl_init('http://localhost:3000');

// 문자열로 출력 요청
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: text/html',
]);

// HTTP GET 요청
echo curl_exec($curl);
