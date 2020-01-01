<?php

/**
 * 세션 파일 저장 경로 얻기/설정하기.
 */
session_save_path(__DIR__.'/Sessions');

/*
 * 세션 시작하기
 */
session_start();

/*
 * 세션 값에 접근, 할당하기
 */
$_SESSION['mySession'] = 'Hello, world';

/*
 * 세션 아이디 얻기/설정하기
 */
session_id();

/*
 * 세션 이름 구하기
 */
session_name();

/*
 * 세션 가비지 컬렉터 실행하기
 */
session_gc();

/*
 * 세션 쿠키 정보 얻기/설정하기
 */
session_get_cookie_params();

/*
 * 세션 값 지우기
 */
unset($_SESSION['mySession']);

/*
 * 세션 값 초기화하기
 */
session_reset();

/*
 * 세션 파일 파괴하기
 */
session_destroy();
