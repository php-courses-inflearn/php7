<?php

/**
 * return value.
 *
 * function <name>(...)[: <return_type>]
 */
function foo(): string
{
    return 'Hello, world';
}

foo(); // -> 'Hello, world'

/**
 * return with context.
 */
function foo2($is = true)
{
    if (true) {
        return 'Hello, world';
    } else {
        return 'Bye';
    }
}

foo2(); // -> 'Hello, world'
foo2(false); // -> 'Bye'
