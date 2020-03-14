<?php

/**
 * Exception
 */

set_error_handler(function ($errno, $errstr) {
    throw new ErrorException($errstr);
});

// set_exception_handler(fn (Exception $e) => var_dump($e->getMessage()));

try {
    echo $message;
} catch (Exception $e) {
    var_dump($e->getMessage());
} finally {
    var_dump('Hello, world');
}
