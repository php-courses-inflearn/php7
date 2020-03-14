<?php

/**
 * Generator
 */

function gen()
{
    yield 1;
    yield 2;
    yield 3;
}

$gen = gen();

$gen->next();
var_dump($gen->current());

$gen->next();
var_dump($gen->current());

/**
 * Compare Memory Usage
 */
function __range($start, $end, $step = 1)
{
    for ($i = $start; $i <= $end; $i += $step) {
        yield $i;
    }
}

// foreach (range(0, 100000) as $number) {
// }
foreach (__range(0, 100000) as $number) {
}

var_dump(memory_get_peak_usage());
