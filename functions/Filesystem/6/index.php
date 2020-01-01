<?php

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
        /**
         * 파일 얻어오기
         */
        $file = $_FILES['uploads'];

        /*
        * 업로드 된 파일인지 확인하기
        */
        if (is_uploaded_file($file['tmp_name'])) {
            /*
            * 파일 업로드 하기
            */
            move_uploaded_file($file['tmp_name'], "./Uploads/".time()."_".$file['name']);
        }
        break;
    }
}

