<?php

/**
 * Magic Methods: Serialize
 */

// class A
// {
//     private $sayHello = 'Hello, world';

//     public function __sleep()
//     {
//         return [ 'sayHello' ];
//     }

//     public function __wakeup()
//     {
//         var_dump(__METHOD__);
//     }
// }

class A implements Serializable
{
    private $sayHello = 'Hello, world';

    public function serialize()
    {
        return serialize($this->sayHello);
    }

    public function unserialize($serialized)
    {
        $this->sayHello = unserialize($serialized);
    }
}

class B extends A
{
}

$a = new B();
$serialized = serialize($a);

var_dump(unserialize($serialized));
