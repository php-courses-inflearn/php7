<?php

/**
 * for.
 */
for ($i = 0; $i < 10; $i++) {
    $i; // -> 0 ~ 9
}

/**
 * for with array.
 */
$messages = [
    'Hello, world',
    'Who are you?',
    'Bye',
];

for ($i = 0; $i < count($messages); $i++) {
    $messages[$i]; // $i -> 0 ~ 2
}
