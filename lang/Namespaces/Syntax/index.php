<?php

/**
 * Namespace
 */

namespace A
{
    const MESSAGE = __NAMESPACE__;

    class A
    {
        public function foo()
        {
            return __METHOD__;
        }
    }

    function foo()
    {
        return __FUNCTION__;
    }

    function var_dump(...$expression)
    {
        return __FUNCTION__;
    }
}
namespace A\B
{
    class A
    {
        public function foo()
        {
            return __METHOD__;
        }
    }
}
namespace B
{
}
namespace
{
    use A\A;
    use A\B\A as AB;

    use function A\foo;
    use const A\MESSAGE;

    $a = new A();
    // $ab = new \A\B\A();
    // $ab = new AB();

    var_dump($a->foo(), foo(), MESSAGE);
}
