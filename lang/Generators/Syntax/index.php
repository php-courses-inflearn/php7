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

// $gen = gen();

// var_dump($gen->current());

// $gen->next();
// var_dump($gen->current());

// $gen->next();
// var_dump($gen->current());

// foreach (gen() as $number) {
//     var_dump($number);
// }

/**
 * Compare Memory Usage
 */
function __range($start, $end, $step = 1)
{
    for ($i = $start; $i <= $end; $i += $step) {
        yield $i;
    }
}

// -> 6695376
// foreach (range(0, 100000) as $number) {
// }

// -> 441120
// foreach (__range(0, 100000) as $number) {
// }

var_dump(memory_get_peak_usage());
