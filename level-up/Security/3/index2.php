<?php

$accepts = [
    'png',
];

$path_parts = pathinfo($_FILES['userfile']['name']);

// 확장자 체크
if (in_array($path_parts['extension'], $accepts)) :
    // 난독화
    $encoded = base64_encode(time() . '_' . $_FILES['userfile']['name']);

    move_uploaded_file(
        $_FILES['userfile']['tmp_name'],
        __DIR__ . '/upload/' . $encoded
    );

// 허용하지 않는 확장자입니다.
else :
    header('HTTP/1.1 400 Bad request');
    echo json_encode([
        'message' => '400 Bad request',
    ]);
endif;
