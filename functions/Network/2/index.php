<?php

/**
 * 쿠키 설정하기.
 */
setcookie('myCookie', 'Hello, world', time() + 60 * 60);

/*
 * 쿠키에 접근하기
 */
 $_COOKIE['myCookie'];

/*
 * 쿠키 삭제하기
 */
setcookie('myCookie', '', time() - 3600);
