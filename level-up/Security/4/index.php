<?php

$accepts = [
    'php', 'md',
];

$path = $_GET['path'];
/**
 * .., / 와 같은 불건전한 경로문자는 제거합니다.
 */
$path = str_replace('..', '', $path);
$path = str_replace('/', '', $path);

$filepath = realpath('./upload/' . $path);

/*
 * 실제로 해당하는 파일이 있는지 검증합니다.
 */
if ($filepath) :
    $path_parts = pathinfo($filepath);

    /*
     * 허용하는 확장자인지 검사합니다.
     */
    if (in_array($path_parts['extension'], $accepts)) :
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $path_parts['basename']);
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($filepath));

        echo readfile($filepath);

    // 허용하지 않는 확장자입니다.
    else :
        header('HTTP/1.1 400 Bad request');
        echo json_encode([
            'message' => '400 Bad request',
        ]);
    endif;

// 파일을 못 찾았습니다.
else :
    header('HTTP/1.1 404 Not found');
    echo json_encode([
        'message' => '404 Not found',
    ]);
endif;
