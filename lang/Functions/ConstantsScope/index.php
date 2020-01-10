<?php

/**
 * Constants Scope.
 */
function foo()
{
    define('__MESSAGE__', 'Hello, world');

    // -> Error
    // const __MESSAGE__ = 'Hello, world';
}

foo();

var_dump(__MESSAGE__);

/**
 * Callbacks (Don't need 'use').
 */
function foo2($callback)
{
    $callback();
}

foo2(function () {
    echo __MESSAGE__;
});
