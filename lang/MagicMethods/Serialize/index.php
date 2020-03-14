<?php

/**
 * Magic Methods: Serialize
 */

class A
{
    public $sayHello = 'Hello, world';

    public function __sleep()
    {
        var_dump(__METHOD__);
        // $this->sayHello = 'Hello, world';

        return [ 'sayHello' ];
    }

    public function __wakeup()
    {
        var_dump(__METHOD__);
    }
}

$a = new A();
$serialized = serialize($a);

var_dump(unserialize($serialized));
