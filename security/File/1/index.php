<?php

/**
 * File Uploads
 */
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET': {
        echo <<<HTML
<form action={$_SERVER['PHP_SELF']} method="POST" enctype="multipart/form-data">
    <input type="file" name="uploads">
    <input type="submit">
</form>
HTML;
        break;
    }
    case 'POST': {
        $file = $_FILES['uploads'];
        $accepts = [
            'png', 'md'
        ];
        /**
         * 파일 확장자 체크하기
         */
        if (in_array(pathinfo($file['name'])['extension'], $accepts)) {
            move_uploaded_file($file['tmp_name'], './Uploads/'.time().'_'.$file['name']);
        } else {
            http_response_code(400);
        }
    }
}

