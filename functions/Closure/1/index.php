<?php

class A
{
    private $message = 'Hello, world';
}

$a = new A();
$foo = fn () => $this->message;

/**
 * Closure::bindTo
 */
$foo = $foo->bindTo($a, $a);
var_dump($foo());

/**
 * Closure::call
 */
var_dump($foo->call($a));

/**
 * From Callable
 */
function foo()
{
    return 'Hello, world';
}

$foo = Closure::fromCallable('\foo');
var_dump($foo());
