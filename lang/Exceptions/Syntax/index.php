<?php

/**
 * Exception
 */

set_error_handler(function ($errno, $errstr) {
    throw new ErrorException($errstr, $errno);
});

set_exception_handler(fn (Exception $e) => var_dump($e->getMessage()));

try {
    var_dump($message);
} finally {
    var_dump('finally');
}
