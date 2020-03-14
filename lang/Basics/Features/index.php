<?php

/**
 * Properties and Methods
 */
class A
{
    public $message = 'Hello, world';

    public function foo()
    {
        // var_dump($this);
        return $this->message;
    }
}

$a = new A();
// var_dump($a);
var_dump($a->foo());

/**
 * Inherit
 */
class B extends A
{
}

$b = new B();
var_dump($b->foo());

/**
 * in Functions
 */
function foo(A $a)
{
    return $a->foo();
}

$b = new B();
var_dump(foo($b));

/**
 * Context
 */
class C extends A
{
    public function foo()
    {
        return new self();
        // return new static;
        // return new parent;
    }
}

class D extends C
{
}

$d = new D();
var_dump($d->foo());

/**
 * Constants
 */
class E
{
    const MESSAGE = 'Hello, world';

    public function getConstants()
    {
        return self::MESSAGE;
    }

    public function getClassName()
    {
        return __CLASS__;
    }
}

// $e = new E();
// var_dump($e->getConstants());

var_dump(E::MESSAGE);

/**
 * Get classname, instanceof
 */
$e = new E();
var_dump($e->getClassName());

$d = new D();
var_dump($d instanceof E);
