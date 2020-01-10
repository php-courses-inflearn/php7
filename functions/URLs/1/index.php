<?php

/**
 * base64 인코딩.
 */
$base64Encoded = base64_encode('Hello, world');

/*
 * base64 디코딩
 */
base64_decode($base64Encoded);

/*
 * 헤더 얻어오기 (PHP가 HTTP Client 로서의 역할)
 */
get_headers('http://example.com');

/*
 * 메타 태그 얻어오기
 */
get_meta_tags('http://example.com');

/**
 * 쿼리 스트링으로 만들기.
 */
http_build_query([
    'message'  => 'Hello, world',
    'language' => 'php',
]);

/*
 * URL 파싱
 */
parse_url('http://example.com/?language=php');

/**
 * URL 인코딩.
 */
$urlEncoded = urlencode('Hello, world');

/*
 * URL 디코딩
 */
urldecode($urlEncoded);
