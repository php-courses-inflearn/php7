<?php

function foo()
{
    // Don't Using 'const' in function
    // const CONSTANT = "Hello, World!";

    define('CONSTANT', 'Hello, World!');
}

foo();

// Hello, World!
echo CONSTANT;
