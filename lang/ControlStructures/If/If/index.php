<?php

/**
 * if.
 */
// [], '', false, 0, null -> false
if (true) {
    'Hello, world';
}

/**
 * if ~ else.
 */
// -> Hello, world
if (true) {
    'Hello, world';
} else {
    'Bye';
}

/**
 * if ~ elseif ~ else.
 */
// -> Hello, world
if (true) {
    'Hello, world';
} elseif (false) {
    'Who are you?';
} else {
    'Bye';
}

/**
 * Define Variables in If Context.
 */
if ($message = 'Hello, world') {
    $message; // Hello, world
}

/**
 * Alternative syntax.
 */
// -> Hello, world
if (true) {
    'Hello, world';
} elseif (false) {
    'Who are you?';
} else {
    'Bye';
}
