<?php

/**
 * 양방향 프로세스 열기.
 */

$p = proc_open(
    'php ./Readline/1/index.php',
    [
    0 => ['pipe', 'r'],
    1 => ['pipe', 'w'],
    2 => ['file', __DIR__ . '/logs/log.log', 'a'],
    ],
    $pipes,
    dirname(__DIR__, 2)
);

// 입력 스트림에 입력하기
fwrite($pipes[0], 'Hello, world');
fclose($pipes[0]);
// 출력 스트림으로 부터 데이터를 얻기
stream_get_contents($pipes[1]);
fclose($pipes[1]);

/**
 * 양방향 프로세스 강제 종료하기 (리소스 할당이 사라지는 것은 아닒).
 */
proc_terminate($p);

/**
 * 양방향 프로세스 상태 확인하기.
 */
proc_get_status($p);

/**
 * 양방향 프로세스 닫기.
 */
proc_close($p);
