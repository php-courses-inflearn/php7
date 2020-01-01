<?php

/**
 * 불리언 (변수) 연산하기
 */
// true or true
true || true; // true
// true and true
true && true; // true
true xor false; // true

/**
 * False 로 연산되는 것 파악하기
 */
// "", false, null, 0, [] ... -> false
[] && true; // false
null && true; // false

/**
 * 비교 연산하기
 */
// 값만 비교
10 == "10"; // true
// 타입까지 비교
10 === "10"; // false
// 값만 비교 -> 10 <> "10"
10 != "10"; // false
// 타입까지 비교
10 !== "10"; // true
// 10 >= 20
10 > 20; // false
// 10 <= 20
10 < 20; // true

/**
 * 우주선 연산자
 */
10 <=> 20; // -1
10 <=> 10; // 0;
20 <=> 10; // 1

/**
 * 반전하기
 */
!true; // false
