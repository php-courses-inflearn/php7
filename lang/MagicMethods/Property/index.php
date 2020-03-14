<?php

/**
 * Magic Methods: Property
 */

class A
{
    // private $message = 'Hello, world';

    public function __set($name, $value)
    {
        var_dump(__METHOD__);
    }

    public function __get($name)
    {
        var_dump(__METHOD__);
    }

    public function __isset($name)
    {
        var_dump(__METHOD__);
        return isset($this->$name);
    }

    public function __unset($name)
    {
        var_dump(__METHOD__);
        unset($this->$name);
    }
}

$a = new A();

// -> __set
$a->message = 'Hello, world';
// -> __get
echo $a->message;

// -> __isset
isset($a->message);
// -> __unset
unset($a->message);
