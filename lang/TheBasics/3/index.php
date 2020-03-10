<?php

/**
 * Anonymous Classes
 */

class A
{
    public function foo()
    {
        return 'Hello, world';
    }
}

class B
{
    public function create()
    {
        return new class extends A
        {
        };
    }
}

$b = new B();
echo $b->create()->foo();
