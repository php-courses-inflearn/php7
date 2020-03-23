<?php

/**
 * SplFileObject
 */

$file = new SplFileObject(dirname(__DIR__, 3) . '/README.md', 'r');
var_dump($file->fread($file->getSize()));

/**
 * SplFileInfo
 */
// $fileinfo = new SplFileInfo(dirname(__DIR__, 3) . '/README.md');
$fileinfo = $file->getFileInfo();

var_dump(
    $fileinfo->getBasename(),
    $fileinfo->getPath(),
    $fileinfo->getType(),
    $fileinfo->getSize(),
    $fileinfo->getExtension()
);
