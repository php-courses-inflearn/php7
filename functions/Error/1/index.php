<?php

/**
 * 로그 수준 조절하기
 */
error_reporting(E_ALL & ~E_NOTICE);

/**
 * 에러 로그 보내기
 */
error_log("Hello, world", 3, __DIR__."/logs/log.txt");

/**
 * 역추적 로그
 */
function foo () 
{
    echo "Hello, world";

    // 역추척 로그 출력하기
    debug_print_backtrace();
    var_dump (debug_backtrace());
}

// foo();

/**
 * 에러 무시하기
 */
function foo2()
{
    asdfasdf;
}
// @ 연산자로 에러를 무시할 수 있다.
@foo2();

/**
 * 에러 핸들러 등록하기
 * 
 * http://docs.php.net/manual/en/errorfunc.constants.php
 */
set_error_handler(function ($errno, $errstr) {
    switch ($errno) {
        case E_USER_ERROR: {
            echo $errstr;
            break;
        }
    }
});

/**
 * 에러 발생시키기
 */
trigger_error("Hello, User ERROR!", E_USER_ERROR);
