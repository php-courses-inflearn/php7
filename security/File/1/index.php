<?php

/**
 * File Uploads.
 *
 * php.ini
 *
 * file_uploads
 */
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo <<<'HTML'
<form action="/" method="POST" enctype="multipart/form-data">
    <input type="file" name="uploads">
    <input type="submit">
</form>
HTML;
        break;
    case 'POST':
        $file = $_FILES['uploads'];
        $path_parts = pathinfo($file['name']);
        $accepts = [
        'png', 'md',
        ];
        if (
            in_array(strtolower($path_parts['extension']), $accepts)
            && is_uploaded_file($file['name']['tmp_name'])
        ) {
            move_uploaded_file($file['tmp_name'], './uploads/' . time() . '_' . $file['name']);
        } else {
            http_response_code(400);
        }
        break;
    default:
        http_response_code(404);
}
