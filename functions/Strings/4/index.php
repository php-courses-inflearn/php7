<?php

/**
 * 문자를 찾고 문자열의 일부분을 반환하기.
 */

strstr('http://example.com', '//');

/*
 * 토큰으로 문자열 분리하기
 */
strtok('http://example.com', '//');
strtok('//');

/*
 * 문자열의 일부분 반환하기
 */
substr('http://example.com', -4, 4);

/*
 * 문자열의 일부분을 비교하기
 */
substr_compare('Hello, world', 'world', -5, 5);

/*
 * 문자열의 일부분 치환하기
 */
substr_replace('Hello, world', 'Hi', 0, 5);

/*
 * 문자열의 일부분에서 특정 문자열의 개수 세기
 */
substr_count('Hello, world', 'l');

/*
 * 길이에 따라 문자열 처리하기
 */
wordwrap('Hello, world', 5);
