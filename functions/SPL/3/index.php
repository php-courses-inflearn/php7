<?php

/**
 * ArrayIterator
 */

$arr = new ArrayObject([ 'message' => 'Hello, world' ]);
$arrayIterator = $arr->getIterator();

while ($arrayIterator->valid()) {
    var_dump($arrayIterator->current());
    $arrayIterator->next();
}

/**
 * DirectoryIterator
 */

$dir = new DirectoryIterator(dirname(__DIR__));

// while ($dir->valid()) {
//     var_dump($dir->current());
//     $dir->next();
// }

// RecursiveDirectoryIterator

/**
 * Recusive Directories
 *
 * @param RecursiveDirectoryIterator $it
 */
function recusiveDirectories(RecursiveDirectoryIterator $it)
{
    while ($it->valid()) {
        var_dump($it->current());
        if ($it->hasChildren()) {
            recusiveDirectories($it->getChildren());
        }
        $it->next();
    }
}

recusiveDirectories(new RecursiveDirectoryIterator(dirname(__DIR__)));
