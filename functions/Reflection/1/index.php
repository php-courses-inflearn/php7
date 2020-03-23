<?php

class A
{
    private string $message = 'Hello, world';

    public function __construct(string $message)
    {
        $this->message = $message;
    }
}

class B extends A
{
}

/**
 * ReflecttionClass
 */
$refClass = new ReflectionClass('\A');
var_dump($refClass->getProperties(ReflectionProperty::IS_PRIVATE));
var_dump($refClass->getConstructor());

$refClassB = new ReflectionClass('\B');
var_dump($refClassB->isSubclassOf('\A'));

/**
 * ReflectionProperty
 */
$messageProperty = $refClass->getProperty('message');
var_dump($messageProperty->getType());
