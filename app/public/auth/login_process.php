<?php

require_once '../../config/Providers.php';
require_once '../../lib/Authentication.php';

/**
 * 외부에서 온 변수는 늘 의심해야 합니다.
 * filter_var, filter_input 함수로 올바른 형식의 값인지 확인하세요.
 */
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
$csrf_token = filter_input(INPUT_POST, 'csrf_token');

if ($email && $password && $csrf_token && verify($csrf_token) && login($email, $password)) :
    // 홈으로 리다이렉트합니다.
    header('HTTP/1.1 302 Redirect');
    header('location: /');
else :
    // 유효하지 않은 값을 전송한 경우 잘못된 요청임을 알립니다.
    header('HTTP/1.1 400 Bad request');
    echo json_encode([
        'message' => '400 Bad reqeust',
    ]);
endif;
