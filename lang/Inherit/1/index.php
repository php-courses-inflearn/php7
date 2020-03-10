<?php

/**
 * Constructor, Destructor
 */
class A
{
    public function __construct()
    {
        var_dump(__METHOD__);
    }

    public function __destruct()
    {
        var_dump(__METHOD__);
    }

    public function foo()
    {
        var_dump(__METHOD__);
    }
}

// $a = new A();

/**
 * Constructor Parameters
 */
class B
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
}

$b = new B('Hello, world');
var_dump($b->message);


/**
 * Inherit
 */
class C extends A
{
    public function __construct()
    {
        parent::__construct();
        var_dump(__METHOD__);
    }

    public function __destruct()
    {
        parent::__destruct();
        var_dump(__METHOD__);
    }

    public function foo()
    {
        parent::foo();
        var_dump('Hello, world');
    }
}

$c = new C();
$c->foo();
