<?php

/**
 * Exception extends
 */
class MyException extends Exception
{
    public function __construct($message = "", $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    // ...
}

try {
    throw new MyException('Hello, world');
} catch(MyException $e) {
    var_dump($e->getMessage());
}
