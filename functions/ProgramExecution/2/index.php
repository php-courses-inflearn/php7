<?php

/**
 * 단방향 프로세스 열기.
 */

$p = popen('php ' . escapeshellarg(dirname(__DIR__, 3) . '/lang/HelloWorld/1/index.php'), 'w');

/**
 * 단방향 프로세스 읽기/쓰기.
 */
fread($p, 1024);

/**
 * 단방향 프로세스 닫기.
 */
pclose($p);
