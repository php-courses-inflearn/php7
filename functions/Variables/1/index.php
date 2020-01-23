<?php

$var = 1;

/*
 * 변수에 타입 지정하기 (타입 캐스팅)
 */
settype($var, 'boolean');

/*
 * 타입 얻어오기
 */
gettype($var);

/*
 * 타입 체크하기
 */
// 정수형
is_int(10);
// 부를 수 있는 형태
is_callable(
    function () {
    }
);
// 반복가능한
is_iterable([]);

/*
 * 변수의 값 할당 체크하기
 */
// 변수가 할당이 안 되어 있는가?
empty(null);
// 변수가 할당이 되어 있는가?
isset($var);

/*
 * 값을 특정 형태로 변환하기
 */
// to boolean
boolval(0);
// to int
intval('56');
// to string
strval(56);

/**
 * 변수를 출력하기.
 */
$var = [
    'language' => 'php',
];

// 사람이 읽기 좋은 형태
print_r($var);
// 디버깅하기 좋은 형태
var_dump($var);
// 표현할 수 있는 형태
var_export($var);

/**
 * 변수를 직렬화/비직렬화 하기.
 */
// 직렬화
$serialized = serialize($var);
// 비직렬화
unserialize($serialized);

/*
 * 변수를 릴리즈하기
 */
unset($var);
