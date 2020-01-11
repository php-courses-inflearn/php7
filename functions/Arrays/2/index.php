<?php

/**
 * 정렬하기: 값.
 */
$numbers = range(1, 5);

// sort($numbers);
rsort($numbers);

/**
 * 연관배열 정렬하기: 값.
 */
$arr = [
    'r' => 'Bye',
    'c' => 'Who are you?',
    'a' => 'Hello, world',
];

asort($arr);
// arsort($arr);

 /**
  * 연관배열 정렬하기: 키.
  */
 ksort($arr);
// krsort($arr);

/**
 * 콜백으로 정렬하기.
 */

// 정렬: 값
usort($numbers, function ($a, $b) {
    return $a > $b;
});

// 연관 배열: 값
uasort($arr, function ($a, $b) {
    return $a > $b;
});

// 연관 배열: 키
uksort($arr, function ($a, $b) {
    return $a > $b;
});
