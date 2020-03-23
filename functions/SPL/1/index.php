<?php

/**
 * Data Structures
 */

// Case 1. Stack

$st = new SplStack();

$st->push('Hello, world');
$st->pop();

$st->push('Who are you?');
$st->push('Bye');

// var_dump($st->top());

// foreach ($st as $element) {
//     var_dump($element);
// }

// Case 2. Queue

$qu = new SplQueue();

$qu->enqueue('Hello, world');
$qu->dequeue();

$qu->enqueue('Who are you?');
$qu->enqueue('Bye');

// foreach ($qu as $element) {
//     var_dump($element);
// }

// Case 3. Fixed Array

// $array = new SplFixedArray(5);
$array = SplFixedArray::fromArray([ 'Hello, world' ]);

// foreach (range(0, 4) as $number) {
//     $array[$number] = $number;
// }

var_dump($array);

// -> ArrayObject

$array2 = new ArrayObject([ 'message' => 'Hello, world' ], ArrayObject::ARRAY_AS_PROPS);
var_dump($array2->message);

// Case 4. Object Storage

$storage = new SplObjectStorage();

$o1 = new stdClass();
$o2 = new stdClass();

$storage->attach($o1);
$storage->attach($o2);

var_dump($storage->contains($o1));
