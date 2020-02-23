<?php

require_once '../../config/Providers.php';
require_once '../../lib/Board.php';

function wrap($s)
{
    return '"' . $s . '"';
}

/**
 * 외부에서 온 변수는 늘 의심해야 합니다.
 * filter_var, filter_input 함수로 올바른 형식의 값인지 확인하세요.
 */
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
$content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
$csrf_token = filter_input(INPUT_POST, 'csrf_token');

// 로그인을 체크해야합니다.
if ($title && $content && verify($csrf_token) && write(wrap($title), wrap($content))) :
    // 홈으로 리다이렉트합니다.
    header('HTTP/1.1 302 Redirect');
    header('location: /');
else :
    // 유효하지 않은 값을 전송한 경우 잘못된 요청임을 알립니다.
    header('HTTP/1.1 401 Unauthorized');
    echo json_encode([
        'message' => '401 Unauthorized',
    ]);
endif;
