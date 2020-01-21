<?php

ini_set('display_errors', 'On');

/**
 * PHP.ini.
 *
 * display_errors = Off, error_reporting = 0
 */
 // Turn off display errors
// ini_set('display_errors', 'Off');
// ,or Set Error reporting
// error_reporting(0);
// ,or Set error Handlder
// set_error_handler(function () {
//     return true;
// });

echo $message; // -> Notice: Undefined index 'message'
