<?php

/**
 * cURL 생성하기.
 */

$curl = curl_init();

/*
 * cURL 옵션 설정하기
 */
curl_setopt($curl, CURLOPT_URL, 'http://localhost/?message=' . urlencode('Hello, world'));
curl_setopt($curl, CURLOPT_HTTPGET, true);

/*
 * cURL 실행 (HTTP GET)
 */
curl_exec($curl);

/*
 * cURL 옵션 초기화 하기
 */
curl_reset($curl);

/*
 * Http POST 요청
 */
curl_setopt($curl, CURLOPT_URL, 'http://localhost');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt(
    $curl,
    CURLOPT_POSTFIELDS,
    [
    'language' => 'php',
    'message'  => 'Hello, world',
    ]
);

/*
 * cURL 닫기
 */
curl_close($curl);
