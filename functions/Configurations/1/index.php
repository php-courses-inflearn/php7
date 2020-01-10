<?php

/**
 * PHP 확장 로드 체크.
 */

extension_loaded('mbstring');

/**
 * 로드된 PHP 확장 보기.
 */
get_loaded_extensions();

/**
 * include/require 패치 설정/얻기.
 */
// 설정하기
set_include_path(__DIR__ . '/mylib');
// require_once "HelloWorld.php";
// 얻기
get_include_path();

/**
 * PHP 정보 얻기.
 */
// 종합적으로 얻기
phpinfo();
// 버전 얻기
phpversion();

/**
 * PHP 옵션 설정/얻기.
 */
// 설정하기
ini_set('display_errors', 0);
// 얻기
ini_get('display_errors');
