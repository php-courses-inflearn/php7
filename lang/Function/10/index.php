<?php

function foo(callable $fn)
{
    echo $fn();
}
function foo2(): void
{
}

// Error
// foo("Hello, World!");

// Hello, World!
foo(function () {
    return 'Hello, World!';
});
