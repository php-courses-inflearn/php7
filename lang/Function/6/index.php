<?php

function foo($is)
{
    if ($is) {
        return 'Hello, World!';
    } else {
        return 'Bye';
    }
}

echo foo(false);
