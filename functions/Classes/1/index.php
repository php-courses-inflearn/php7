<?php

/**
 * Classes/Objects Functions
 */

class A
{
    public $message = 'Hello, world';

    public function foo()
    {
        return $message;
    }
}

class B extends A
{
}

class_alias('A', 'MyClass');

/**
 * Exists
 */
class_exists('MyClass');
var_dump(property_exists('MyClass', 'message'));

/**
 * Get
 */
$a = new MyClass();

get_class($a);
get_class_vars('MyClass');

var_dump(get_class_methods('MyClass'));
var_dump(get_declared_classes());

/**
 * is
 */
$b = new B();

var_dump(is_a($b, 'MyClass'), is_a($b, 'B'), $b instanceof B, $b instanceof A);
var_dump(is_subclass_of($b, 'MyClass'));


