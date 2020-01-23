<?php

/**
 * 경로에서 파일 이름 가져오기.
 */

basename('C:\\tools\\php72\\php');

/*
 * 경로에서 부모(조상) 디렉토리 경로 가져오기
 */
dirname('C:\\tools\\php72\\php');

/*
 * 상대경로를 절대경로로 표시하기
 */
realpath('.');

/*
 * 경로 정보 얻어오기
 */
pathinfo('C:\\tools\\php72\\php');

/*
 * 패턴으로 경로 정보 얻어오기
 */
glob('./*.php');

/*
 * 패턴으로 경로 검사하기
 */
fnmatch('./*.php', './index.php');
