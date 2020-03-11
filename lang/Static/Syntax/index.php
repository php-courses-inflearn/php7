<?php

/**
 * Static
 */
class A
{
    public static $message = 'Hello, world';

    public static function foo()
    {
        // return $this->message;
        return self::$message;
    }
}

$classname = 'A';

$a = new $classname();
echo $a->foo();

// echo $classname::foo();
