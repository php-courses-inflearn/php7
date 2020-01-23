<?php

/**
 * Data Control in Array.
 */

$messages = [
    'Hello, world',
    'Who are you?',
    'Bye',
];

/**
 * Insert.
 */
// $messages[3] = 'whoops'
$messages[] = 'whoops';

/**
 * Select.
 */
$messages[3]; // -> whoops

/**
 * Update.
 */
$messages[3] = 'Do you know?';

/**
 * Delete.
 */
unset($messages[3]);
