<?php

/**
 * 문자열 포맷팅.
 *
 * -> %s 문자열
 * -> %d 숫자
 * -> %f 실수형
 */

// 파라매터 나열하기
printf('Hello, world %s', 'Mr. Lauren');
// 파라매터 배열로 주기
vprintf(
    'Hello, world %s',
    [
    'Mr. Lauren',
    ]
);

// 스프레드로 사용하기
printf('Hello, world %s', ...['Mr. Lauren']);

/**
 * 문자열 포맷 (버퍼링).
 */
$buf = sprintf('Hello, world %s', 'Mr. Lauren');
vsprintf(
    'Hello, world %s',
    [
    'Mr. Lauren',
    ]
);

// 마찬가지로
sprintf('Hello, world %s', ...['Mr. Lauren']);
