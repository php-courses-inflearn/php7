<?php

/**
 * 현재 위치 바꾸기.
 */
chdir(__DIR__);

/*
 * 현재 디렉토리 경로 얻기
 */
getcwd();

/**
 * 디렉토리 읽기.
 */
$files = scandir(__DIR__.'/../..');

/**
 * 디렉토리 핸들링
 */
// 디렉토리 열기
$dir = opendir(__DIR__.'/../..');
// 디렉토리 읽기
while ($name = readdir($dir)) {
}
// 디렉토리 커서 초기화
rewinddir($dir);
// 디렉토리 닫기
closedir($dir);
