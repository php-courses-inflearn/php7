<?php

/**
 * 오버로딩.
 */
// function foo () {};
function foo()
{
    $argCount = func_num_args();
    switch ($argCount) {
        case 1: {
            var_dump(func_get_arg(0));
            break;
        }
        case 2: {
            var_dump(func_get_args());
            break;
        }
    }
}

/**
 * Rest 파라매터.
 */
function foo2(...$args)
{
    switch (count($args)) {
        case 1: {
            var_dump($args[0]);
            break;
        }
        case 2: {
            var_dump($args);
            break;
        }
    }
}

/**
 * Destructuring.
 */
function foo3($arg1, $arg2)
{
    var_dump($arg1, $arg2);
}
