<?php

/**
 * File Downloads.
 */
$path = filter_input(INPUT_GET, 'path', FILTER_SANITIZE_STRING);
$filepath = realpath('./uploads/'.basename($path));

/*
 * Check file exists
 */
if (file_exists($filepath)) {
    $path_parts = pathinfo($filepath);
    $accepts = [
        'md',
    ];
    /*
     * Check file extensions
     */
    if (in_array($path_parts['extension'], $accepts)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$path_parts['basename']);
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: '.filesize($filepath));

        readfile($filepath);
    } else {
        http_response_code(400);
    }
} else {
    /**
     * Not Found.
     */
    http_response_code(404);
}
