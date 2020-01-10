<?php

/**
 * 스트림 컨텍스트 만들기.
 *
 * http://docs.php.net/manual/en/context.php
 */

$handle = stream_context_create();

/**
 * 스트림 컨텍스트 옵션 설정하기.
 */
stream_context_set_option($handle, [
    'http' => [
        'method' => 'GET',
        'header' => "Accept-language: en\r\n" .
                   "Cookie: foo=bar\r\n",
    ],
]);

/**
 * 스트림 컨텍스트로 HTTP 요청하기.
 */
file_get_contents('http://example.com', false, $handle);

/**
 * 스트림 필터 목록 얻기.
 */
stream_get_filters();

/**
 * 스트림 필터 설정하기.
 *
 * http://docs.php.net/manual/en/wrappers.php
 */
// $fh = fopen("http://example.com", 'r');
$fh = fopen(dirname(__DIR__, 3) . '/README.md', 'r');

// 필터 추가
stream_filter_append($fh, 'string.toupper');

// fread($fh, 2048);
stream_get_contents($fh);
