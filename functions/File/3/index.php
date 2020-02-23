<?php

$filename = __DIR__ . '/bar.txt';

// 쓰기모드로 파일 열기
$fh = fopen($filename, 'wb');

if ($fh) :
    fwrite($fh, "Hello, World! \nBye");

    // 읽기모드로 파일 열기
    $fh = fopen($filename, 'rb');

    while (!feof($fh) && ($line = fgets($fh))) :
        echo $line;
    endwhile;

    fclose($fh);
endif;
