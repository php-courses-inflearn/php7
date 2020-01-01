<?php

/**
 * 파일, 디렉토리 존재여부 체크하기.
 */
file_exists('./index.php');

/*
 * 파일 복사하기
 */
if (!file_exists('./file_functions.php')) {
    copy('./index.php', './file_functions.php');
}

/*
 * 디렉토리 만들기
 */
if (!file_exists('./Sessions')) {
    mkdir('./Sessions');
}

/*
 * 파일 삭제하기
 */
if (file_exists('./file_functions.php')) {
    unlink('./file_functions.php');
}

/*
 * 디렉토리 삭제하기
 */
if (file_exists('./Sessions')) {
    rmdir('./Sessions');
}
