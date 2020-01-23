<?php

/**
 * 요청 메서드에 따라 분리하기.
 */
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
         $_GET['message'];
        break;
    case 'POST':
        print_r($_POST);
        break;
    default:
        http_response_code(404);
}
