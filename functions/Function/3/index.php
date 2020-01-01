<?php

/**
 * 함수에 타입 지정하기.
 */

/**
 * 'foo' function.
 *
 * @param array $arg1
 *
 * @return void
 */
function foo($arg1)
{
    if (is_array($arg1)) {
        foreach ($arg1 as $v) {
            var_dump($v);
        }
    }
}

function foo2(array $arg1): void
{
    foreach ($arg1 as $v) {
        var_dump($v);
    }
}
