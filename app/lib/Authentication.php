<?php

const USERS_PATH = __DIR__ . '/../storage/users.csv';

/**
 * Register a user.
 *
 * @param string $email
 * @param string $password
 *
 * @return bool
 */
function register(string $email, string $password): bool
{
    if (file_exists(USERS_PATH)) :
        /**
         * 같은 이메일이 있는지 검사합니다.
         *
         * 모든 라인을 검사하기 때문에 파일이 커지면 느려집니다.
         * 데이터베이스가 아닌 파일시스템이라 발생하는 문제.
         */
        $fh = fopen(USERS_PATH, 'a+');
        $currentUserId = 1;
        while (!feof($fh) && ($row = fgetcsv($fh))) :
            /*
             * CSV 파일에 저장된 데이터 필드입니다.
             * 키값이 없으므로 구분을 위해 따로 변수를 선언해둡니다.
             */
            foreach (['_id', '_email', '_password'] as $index => $name) :
                $$name = $row[$index];
            endforeach;

            $currentUserId++;

            if ($email == $_email) :
                $is = false;
            // 같은 이메일이 있으면 빠져나갑니다.
                break;
            endif;
        endwhile;

        if (!isset($is)) :
            // 유저를 추가합니다.
            fputcsv($fh, [$currentUserId, $email, $password]);
        endif;

        fclose($fh);

        return isset($is) ? false : true;
    endif;
}

/**
 * Login.
 *
 * @param string $email
 * @param string $password
 *
 * @return bool
 */
function login(string $email, string $password): bool
{
    if (file_exists(USERS_PATH)) :
        $fh = fopen(USERS_PATH, 'r');
        while (!feof($fh) && ($row = fgetcsv($fh))) :
            /*
             * CSV 파일에 저장된 데이터 필드입니다.
             * 키값이 인덱스이므로 구분을 위해 따로 변수를 선언해둡니다.
             */
            foreach (['_id', '_email', '_password'] as $index => $name) :
                $$name = $row[$index];
            endforeach;

            if ($email == $_email && password_verify($password, $_password)) :
                // 로그인 세션을 시작합니다.
                $_SESSION['user'] = $_email;
                $is = true;
            // 시도이후에는 반복문을 빠져나갑니다.
                break;
            endif;
        endwhile;

        fclose($fh);

        return isset($is) ? true : false;
    endif;
}

/**
 * Getting current user.
 *
 * @return string|bool
 */
function user()
{
    if (isset($_SESSION['user'])) :
        return $_SESSION['user'];
    else :
            return false;
    endif;
}
