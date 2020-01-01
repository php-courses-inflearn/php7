<?php

$path = dirname(__DIR__, 3).'/README.md';
$fh = fopen($path, 'r+');

/*
 * 파일에 대한 정보 얻기
 */
// 파일 포인터로 부터
fstat($fh);
// 파일 이름으로부터
stat($path);

/*
 * 개별 파일 정보 얻기
 */
// 접근 시간 얻기
fileatime($path);
// 수정 시간 얻기
filemtime($path);
// 파일 크기 얻기
filesize($path);
// 파일 타입 얻기
filetype($path);

/*
 * 경로의 타입 체크하기
 */
// 디렉토리
is_dir($path);
// 파일
is_file($path);
// 링크
is_link($path);
