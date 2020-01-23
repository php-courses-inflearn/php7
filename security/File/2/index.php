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

$filepath = realpath('./uploads/' . basename($path));

if (file_exists($filepath)) {
    $path_parts = pathinfo($filepath);
    $accepts = [
        'md',
    ];
    if (in_array($path_parts['extension'], $accepts)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $path_parts['basename']);
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($filepath));

        readfile($filepath);
    } else {
        http_response_code(400);
    }
} else {
    http_response_code(404);
}
