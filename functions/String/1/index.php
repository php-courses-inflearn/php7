<?php

/**
 * 문자열 따옴표에 슬래시 추가/삭제.
 */
// 슬래시 추가
$slashe = addslashes("Hello' world");
// 슬래시 삭제
stripslashes($slashe);

/**
 * 2진수와 16진수.
 */
$bytes = random_bytes(64);

// 2진수 -> 16진수
$hex = bin2hex($bytes);
// 16진수 -> 2진수
hex2bin($hex);

/*
 * 단방향 해시함수 (암호화)
 *
 * sha1, md5 함수는 추천하지 않음
 */
crypt("Hello, world", "secret");

/**
 * 문자열을 분리, 합치기.
 */
// 문자열 분리하기
explode(",", "Hello, world");
// 문자열 합치기
implode(", ", ["Hello", "world"]);

/**
 * HTML 엔티티 인코딩, 디코딩.
 */
$html = <<<HTML
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body></body>
</html>
HTML;

// HTML 엔티티 인코딩
$encodedHtml = htmlentities($html);
// html 엔티티 디코딩
html_entity_decode($encodedHtml);

/*
 * HTML 태그를 날려버리기
 */
strip_tags($html);

/*
 * \n -> <br> tag
 */
nl2br("Hello,\nworld");

/*
 * 문자를 숫자로, 숫자를 문자로
 */
// 문자를 숫자로 바꾸기
ord('A');
// 숫자를 문자로 바꾸기
chr(65);

/**
 * 쿼리 스트링 파싱.
 */
$arr = [];
parse_str("langauge=php&addr=127.0.0.1", $arr);

/*
 * 숫자 포맷팅
 */
number_format(12345678.1234, 1);

/**
 * 대소문자 변경.
 */
// 소문자 -> 대문자
strtoupper("Hello, world");
// 대문자 -> 소문자
strtolower("Hello, world");

/*
 * 양 옆 공백 제거하기
 */
trim(' Hello, world ');

/*
 * 문자열 번역하기
 */
strtr("Hello, world", [
    "Hello" => "안녕하세요"
]);