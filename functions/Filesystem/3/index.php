<?php

$path = dirname(__DIR__, 3) . '/README.md';

/**
 * 파일 열기.
 */
$fh = fopen($path, 'r+');

/*
 * 파일 포인터
 */
// 파일 포인터 초기화
rewind($fh);
// 파일 포인터 위치 지정
fseek($fh, 0, SEEK_SET);
// 현재 파일 포인터 반환
ftell($fh);
// 파일 포인터가 끝에 있는지 검사
feof($fh);

/*
 * 파일 읽기
 */
// -> string
file_get_contents($path);
// -> array
file($path);
// -> Output stream
readfile($path);

/*
 * 파일 읽기: 파일 포인터
 */
// fgets, fgetc
while (($line = fgets($fh)) && !feof($fh)) {
    //  $line;
}
// -> string
rewind($fh);
fread($fh, filesize($path));

// -> Output stream
rewind($fh);
fpassthru($fh);

// fscanf
rewind($fh);
while (($line = fscanf($fh, "%s\t%s\t%s\t%s\t%s\n")) && !feof($fh)) {
    // var_dump($line);
}

$path = './HelloWorld.txt';
$fh = fopen($path, 'w');

/**
 * 파일 쓰기.
 */
// -> Output stream
if (!file_exists($path)) {
    file_put_contents($path, 'Hello, world');
}

/*
 * 파일 쓰기: 파일 포인터
 */
rewind($fh);

// -> Output stream
fwrite($fh, 'Hello, world');
// -> Output stream
fwrite($fh, 'Hello, world');
// -> Output stream (Force)
fflush($fh);

/**
 * 파일 내용 자르기.
 */
$fh = fopen($path, 'r+');
ftruncate($fh, rand(1, filesize($path)));

/*
 * 파일 닫기
 */
fclose($fh);
