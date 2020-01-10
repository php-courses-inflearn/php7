<?php

/**
 * 해시 알고리즘 나열하기.
 */
hash_algos();

/**
 * 해시 값 만들기.
 */
$hash = hash('sha256', 'Hello, world');
// $hash = crypt("Hello, world", "secret");

/*
 * 해시가 같은지 확인하기
 */
hash_equals($hash, hash('sha256', 'Hello, world'));

/**
 * 해시 핸들링
 */
// 해시 열기
$h = hash_init('sha256');
// 해시 만들기
hash_update($h, 'Hello, world');
// 해시값 얻기
hash_final($h);

/**
 * 키를 통한 메시지 인증.
 *
 * key -> "secret" 이라는 키가 공개키로 지정되어 있다고 가정
 */
// 인증용 해시 만들기
$hash = hash_hmac('sha256', 'Hello, world', 'secret');
// 메시지 인증하기
hash_equals($hash, hash_hmac('sha256', 'Hello, world', 'secret'));
