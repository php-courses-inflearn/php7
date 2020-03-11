<?php

/**
 * Trait
 */

trait A
{
    public $message = 'Hello, world';

    public function hello()
    {
        return $this->foo();
    }

    abstract public function foo();
}

trait AA
{
    public function hello()
    {
        return __TRAIT__;
    }
}

trait AAA
{
    use A, AA {
        A::hello insteadof AA;
        A::hello as protected h;
    }
}

class B
{
    use AAA;

    public function foo()
    {
        return $this->message;
    }
}

// var_dump((new B())->hello());

class C
{
    private $message = 'Hello, world';

    public function hello()
    {
        return $this->message;
    }
}

trait D
{
    public function hello()
    {
        return __TRAIT__;
    }
}

class E extends C
{
    use D;

    public function hello()
    {
        return __CLASS__;
    }
}

$e = new E();
var_dump($e->hello());
