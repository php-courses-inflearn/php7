<?php

/**
 * File Downloads
 */
$path = filter_input(INPUT_GET, 'path', FILTER_SANITIZE_STRING);
/**
 * .., / 와 같은 불건전한 경로문자는 제거합니다.
 */
$path = str_replace('..', '', $path);
$path = str_replace('/', '', $path);

$filepath = realpath('./Uploads/'.$path);

/*
 * 실제로 해당하는 파일이 있는지 검증합니다.
 */
if (file_exists($filepath)) {
    $path_parts = pathinfo($filepath);
    $accepts = [
        'md',
    ];
    /*
     * 허용하는 확장자인지 검사합니다.
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
     * 파일이 없습니다.
     */
    http_response_code(404);
}


