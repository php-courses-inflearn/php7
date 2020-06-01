<?php

/**
 * Classes Autoloading (PSR-4)
 */

spl_autoload_register(function ($classname) {
    include $classname . '.php';
});

// use Classes\MyClass;

// MyClass::foo();

// Unregister

$autoloadFunctions = spl_autoload_functions();
var_dump($autoloadFunctions);

foreach ($autoloadFunctions as $function) {
    spl_autoload_unregister($function);
}
