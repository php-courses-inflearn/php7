<?php

function foo($callback)
{
    $callback();
}

// Hello, World!
foo(function () {
    echo 'Hello, World!';
});
