<?php

/**
 * 타임존 설정/얻기
 * 
 * http://docs.php.net/manual/en/timezones.php
 */
// 설정하기
date_default_timezone_set("Asia/Seoul");
// 얻기
date_default_timezone_get();

/**
 * 시간 얻기: 유닉스 타임 스탬프
 */
$t = time();
// 로컬 시간 구하기
localtime($t, true);
// 시간 구하기 2
getdate($t);

strftime("%d/%m/%Y/ %H:%M:%S", $t);
 
/**
 * 시간 변환하기
 */
date("d/M/Y/ H:i:s", $t);

/**
 * 타임 스탬프 만들기
 */
$timestamp = mktime("1", "15", "30");

/**
 * 시간 파싱하기
 */
// -> localtime 형태로 반환
// strptime(strftime("%Y/%m/%d/ %H:%M:%S", $t), "%Y/%m/%d/ %H:%M:%S");

/**
 * 문자열을 시간으로 만들기
 */
strtotime("now");
strtotime("28 Dec 2019");
strtotime("+1 day");
strtotime("+1 week");
strtotime("+1 week 2 days 4 hours 2 seconds");
strtotime("next Thursday");
strtotime("last Monday");

/**
 * 스크립트 타임 시간 체킹
 */
$stime = microtime(true);

usleep(10000);

var_dump(microtime(true) - $stime);