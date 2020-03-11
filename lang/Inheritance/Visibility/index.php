<?php

/**
 * Visibility
 */

class A
{
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';
}

$a =  new A();
var_dump($a->public);
// var_dump($a->protected);
// var_dump($a->private);

class B extends A
{
    private $message = 'Hello, world';

    public function __construct()
    {
        var_dump($this->public);
        var_dump($this->protected);
        // var_dump($this->private);

        var_dump($this->message);
    }
}

new B();
