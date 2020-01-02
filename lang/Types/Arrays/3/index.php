<?php

/**
 * for with array
 */
$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

for ($i = 0; $i < count($messages); $i++) {
    $messages[$i]; // $i -> 0 ~ 2
}

/**
 * foreach (as [$key => ] $value)
 */
$response = [
    'name' => 'PHP 7+ Programming: Basic',
    'categoryId' => 0,
    'messages' => [
        'Hello, world',
        'Who are you?',
        'Bye'
    ]
];

foreach ($response as $key => $value) {
    if (is_array($value)) {
        foreach ($messages as $message) {
            $message;
        }
    } else {
        // $response[$key];
        $value;
    }
}

/**
 * Alternative syntax
 */
foreach ($response as $key => $value):
    if (is_array($value)) {
        foreach ($messages as $message) {
            $message;
        }
    } else {
        // $response[$key];
        $value;
    }
endforeach;
