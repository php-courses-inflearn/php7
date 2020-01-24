<?php

function foo($arg1)
{
    /*
     * 파라매터 개수 구하기
     */
    func_num_args();

    /*
     * 파라매터 값 구하기
     */
    $args = func_get_args();
}

/*
 * 함수 호출하기
 */
call_user_func('foo', 'Hello, world', 1);

/*
 * 함수 존재 여부 파악하기
 */
function_exists('foo');

/**
 * Get defined functions
 */
get_defined_functions();
