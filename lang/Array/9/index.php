<?php

$comments = [
    'Hello, World!',
    'Who are you?',
    'Bye',
];

/*
 * Hello, World!
 * Who are you?
 * Bye
 */
for ($i = 0; $i < count($comments); $i++) {
    echo "$comments[$i] \n";
}
