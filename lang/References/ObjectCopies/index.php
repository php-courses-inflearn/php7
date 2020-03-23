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

var_dump($myclass1 == $myclass2); // -> true
var_dump($myclass1 === $myclass2); // -> false

/**
 * Copy
 */

// -> $myclass3 = $myclass1 = <Object Id>
// $myclass3 = $myclass1;

// -> ($myclass3, $myclass1) = <Object Id>
// $myclass3 =& $myclass1;

// $myclass3 = clone $myclass1;
// var_dump($myclass1 === $myclass3);

// $myclass3->message = 'Who are you?';
// var_dump($myclass1);

/**
 * Shallow Copy vs Deep Copy
 */

class MyArrayObject implements ArrayAccess, IteratorAggregate
{
    private $container = [];

    /**
     * Create a new MyAArrayObject Instance
     *
     * @param array $array
     *
     * @return MyArrayObject
     */
    public function __construct($array)
    {
        $this->container = $array;
    }

    /**
     * Get cloned object
     */
    public function __clone()
    {
        array_walk($this->container, fn (&$value) => is_object($value) ? $value = clone $value : null);
    }

    /**
     * IteratorAggregate::getIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->container);
    }

    /**
     * ArrayAccess::offsetSet
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * ArrayAccess::offsetExists
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * ArrayAccess::offsetUnset
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * ArrayAccess::offsetGet
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

$array1 = new MyArrayObject([ 1, 2, new MyArrayObject([ 3, 4 ]) ]);

// Case 1. __clone()

// $array2 = $array1;
$array2 = clone $array1;

$array2[0] = 10;
$array2[2][] = 5;

var_dump($array1 === $array2);
var_dump($array1[2] === $array2[2]);

foreach ($array2 as $key => $value) {
    var_dump($value);
}

// Case 2. Serialize

$array2 =  unserialize(serialize($array1));

$array2[0] = 10;
$array2[2][] = (5);

var_dump($array1 === $array2);
var_dump($array1[2] === $array2[2]);
