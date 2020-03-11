<?php

function foo(A $a)
{
    echo $a->foo();
}

/**
 * Interface
 */
interface A
{
    public function foo();
}

class B implements A
{
    public function foo()
    {
        return __CLASS__;
    }
}

class C implements A
{
    public function foo()
    {
        return __CLASS__;
    }
}

foo(new C());
