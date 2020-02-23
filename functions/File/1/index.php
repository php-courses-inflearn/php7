<?php

$fn = __DIR__ . '/bar.txt';

// bar.txt 파일을 씁니다.
file_put_contents($fn, 'Hello, World!');
// bar.txt 파일을 전부 다 읽어옵니다.
echo file_get_contents($fn);
