<?php

$etag = md5(__FILE__ . filemtime(__FILE__));

if (array_key_exists('HTTP_IF_NONE_MATCH', $_SERVER)) :
    if ($etag == $_SERVER['HTTP_IF_NONE_MATCH']) :
        header('HTTP/1.1 304 Not Modified');
        header('Cache-Control: public');
        exit;
    endif;
else :
    header('Content-Type: text/html');
    header('Cache-Control: public, max-age=0, must-revalidate');
    header('Etag: ' . $etag);

    echo 'Hello, World!';
endif;
