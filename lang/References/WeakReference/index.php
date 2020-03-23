<?php

/**
 * WeakReference
 */

$array = [ 'message' => 'Hello, world' ];

$class = (object) $array; // -> stdClass
// var_dump($class);

// $ref =& $class;
$weakRef = WeakReference::create($class);
var_dump($weakRef->get());

unset($class);

var_dump($weakRef->get());
// var_dump($ref);
