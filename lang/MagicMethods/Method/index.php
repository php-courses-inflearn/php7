<?php

/**
 * Magic Methods: Methods
 */

class A
{
    public function __call($name, $args)
    {
        var_dump(__METHOD__);
    }

    public static function __callStatic($name, $args)
    {
        var_dump(__METHOD__, $args);
    }

    public function __invoke(...$args)
    {
        var_dump(__METHOD__, $args);
    }
}

$a = new A();

$a();

// $a->foo();
// A::foo(range(0, 2));
