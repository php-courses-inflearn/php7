<?php

/**
 * File Downloads.
 *
 * php.ini
 *
 * allow_url_fopen, allow_url_include
 */

$path = filter_input(INPUT_GET, 'path', FILTER_SANITIZE_STRING);

if (!preg_match('/^(?:[0-9a-z_-]|\.(?!\.))+$/i', $path)) {
    exit;
}

$filepath = realpath(dirname(__DIR__) . '/uploads/' . basename($path));

if (file_exists($filepath)) {
    $pathInfo = pathinfo($filepath);
    $accepts = [
        'md'
    ];
    if (in_array($pathInfo['extension'], $accepts)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $pathInfo['basename']);
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($filepath));

        // -> Output stream
        readfile($filepath);
    }
}
