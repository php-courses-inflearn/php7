<?php

require_once 'Authentication.php';

/**
 * Authentication Guard.
 *
 * @param array $guards
 *
 * @return void
 */
function guard(array $guards): void
{
    foreach ($guards as $uri) :
        // 로그인이 안 되면 401 을 응답으로 줍니다.
        if ($_SERVER['SCRIPT_NAME'] == $uri) :
            if (!user()) :
                header('HTTP/1.1 401 Unauthorized');
                echo json_encode([
                    'message' => '401 Unauthorized',
                ]);
                exit;
            endif;
        endif;
    endforeach;
}
