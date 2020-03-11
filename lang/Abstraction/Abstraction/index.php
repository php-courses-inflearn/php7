<?php

function foo(A $a)
{
    echo $a->foo();
}

/**
 * Class Abstraction
 */
abstract class A
{
    public $message = 'Hello, world';

    public function hello()
    {
        return $this->message;
    }

    abstract public function foo();
}

class B extends A
{
    public function foo()
    {
        return __CLASS__;
    }
}

class C extends A
{
    public function foo()
    {
        return __CLASS__;
    }
}

// (new B())->foo();
foo(new B());
