<?php

/**
 * Sort by value
 */
$numbers = range(1, 5);

// sort($numbers);
rsort($numbers);

/**
 * Assoc sort by value
 */
$arr = [
    'r' => 'Bye',
    'c' => 'Who are you?',
    'a' => 'Hello, world',
];

asort($arr);
// arsort($arr);

/**
 * Sort by key
 */
 ksort($arr);
// krsort($arr);

/**
 * Sort by callback
 */
// Sort by value
usort($numbers, function ($a, $b) {
    return $a > $b;
});

// Assoc sort by value
uasort($arr, function ($a, $b) {
    return $a > $b;
});

// Sort by key
uksort($arr, function ($a, $b) {
    return $a > $b;
});
