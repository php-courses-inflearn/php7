<?php

ini_set('display_errors', 'On');

/**
 * PHP.ini.
 *
 * display_errors = Off, error_reporting = 0
 */
ini_set('display_errors', 'Off');
// ,or
// error_reporting(0);
// ,or
// set_error_handler(function () {});

// -> Undefined variable: message
echo $message;
