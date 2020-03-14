<?php

class MyClass
{
    public $message = 'Hello, world';
}

/**
 * Compare
 */
$myclass1 = new MyClass();
$myclass2 = new MyClass();

var_dump($myclass1 == $myclass2); // -> false
var_dump($myclass1 === $myclass2); // -> true

$myclass2 = clone $myclass1;
var_dump($myclass1 === $myclass2); // -> false

// $myclass3 = $myclass1 = <Object Id>
$myclass3 = $myclass1;
// ($myclass4, $myclass1) = <Object Id>
$myclass4 =& $myclass1;

var_dump($myclass1 === $myclass3); // -> true
var_dump($myclass1 === $myclass4); // -> true

$myclass3 = null;
var_dump($myclass1);

$myclass4 = null;
var_dump($myclass1);

/**
 * Copy
 */
class SubObject
{
    public static $count = 0;
    public $instance;

    public function __construct()
    {
        $this->instance = ++self::$count;
    }

    public function __clone()
    {
        $this->instance = ++self::$count;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    public function __clone()
    {
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);

/**
 * Shallow Copy vs Deep Copy
 */
$array1 = new ArrayObject([ 1, 2, new ArrayObject([ 3, 4 ]) ]);

$array2 = $array1;
// $array2 = clone $array1;

$array2[0] = 10;
$array2[2]->append(5);
// array_push($array2, 5);

var_dump($array1);
